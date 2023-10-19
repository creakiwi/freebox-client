<?php

namespace Creakiwi\Freebox\Domain;

use Creakiwi\Freebox\Domain\Contract\AuthenticationRepository;
use Creakiwi\Freebox\Domain\Contract\DownloadRepository;
use Creakiwi\Freebox\Domain\Contract\FileSystemRepository;
use Creakiwi\Freebox\Domain\Contract\FreeboxRepository;
use Creakiwi\Freebox\Domain\Contract\LanguageRepository;
use Creakiwi\Freebox\Domain\Exception\UnregisteredRepositoryException;
use Creakiwi\Freebox\Domain\Model\Authentication\Identifiers;
use Creakiwi\Freebox\Domain\Model\Authentication\Session;

final class Freebox
{
    private array $repositories = [];

    private readonly Identifiers $identifiers;
    private ?Session $session = null;

    public function __construct(Identifiers $identifiers)
    {
        $this->identifiers = $identifiers;
    }

    private function authenticate(): Session
    {
        $challenge = $this->getAuthentication()->challenge();
        $session = new Session($this->identifiers, $challenge->getChallenge());

        return $this->getAuthentication()->sessionStart($session);
    }

    private function repositoryKey(FreeboxRepository $repository): string
    {
        return md5(array_values(class_implements($repository))[0]);
    }
    public function addRepository(FreeboxRepository $repository): void
    {
        if (null !== $this->session) {
            $repository->setSession($this->session);
        }

        $this->repositories[$this->repositoryKey($repository)] = $repository;
    }

    private function getNullableRepository(string $repositoryClass): ?FreeboxRepository
    {
        if (true === array_key_exists(md5($repositoryClass), $this->repositories)) {
            return $this->repositories[md5($repositoryClass)];
        }

        return null;
    }

    public function getRepository(string $repositoryClass): FreeboxRepository
    {
        $repository = $this->getNullableRepository($repositoryClass);

        if (null === $repository || false === ($repository instanceof $repositoryClass)) {
            throw new UnregisteredRepositoryException($repositoryClass);
        }

        if (false === ($repository instanceof AuthenticationRepository) && null === $this->session) {
            $this->session = $this->authenticate();

            $repository->setSession($this->session);
        }

        return $repository;
    }

    public function getAuthentication(): AuthenticationRepository
    {
        return $this->getRepository(AuthenticationRepository::class);
    }

    public function getLanguage(): LanguageRepository
    {
        return $this->getRepository(LanguageRepository::class);
    }

    public function getDownload(): DownloadRepository
    {
        return $this->getRepository(DownloadRepository::class);
    }

    public function getFileSystem(): FileSystemRepository
    {
        return $this->getRepository(FileSystemRepository::class);
    }
}
