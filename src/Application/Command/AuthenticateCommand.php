<?php

namespace Creakiwi\Freebox\Application\Command;

use Creakiwi\Freebox\Domain\Contract\FreeboxRepository;
use Creakiwi\Freebox\Domain\Freebox;
use Creakiwi\Freebox\Domain\Model\Authentication\Identifiers;
use Creakiwi\Freebox\Infrastructure\Repository\AuthenticationRepository;
use Creakiwi\Freebox\Infrastructure\Repository\DownloadRepository;
use Creakiwi\Freebox\Infrastructure\Repository\FileSystemRepository;
use Creakiwi\Freebox\Infrastructure\Repository\LanguageRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsCommand('freebox:authenticate')]
class AuthenticateCommand extends Command
{
    private HttpClientInterface $httpClient;

    private SerializerInterface $serializer;

    private Freebox $freebox;

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        $this->httpClient = HttpClient::create();

        $normalizers = [new ObjectNormalizer(), new ArrayDenormalizer()];
        $encoders = [new JsonEncoder()];
        $this->serializer = new Serializer($normalizers, $encoders);
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__.'/../../../.env', __DIR__.'/../../../.env.local');

        $appToken = $_ENV['APP_TOKEN'];
        $trackId = $_ENV['TRACK_ID'];
        $identifiers = new Identifiers('com.creakiwi.freebox', 'Freebox Client', '0.1', 'zephir');
        $identifiers->setAppToken($appToken);
        $identifiers->setTrackId($trackId);

        $this->freebox = new Freebox($identifiers);

        $repositories = [
            new AuthenticationRepository($this->httpClient, $this->serializer),
            new LanguageRepository($this->httpClient, $this->serializer),
            new DownloadRepository($this->httpClient, $this->serializer),
            new FileSystemRepository($this->httpClient, $this->serializer),
        ];

        /** @var FreeboxRepository $repository */
        foreach ($repositories as $repository) {
            $this->freebox->addRepository($repository);
        }
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $files = $this->freebox->getFileSystem()->ls();
        $files = $this->freebox->getFileSystem()->ls($files[2]->getPath());
        dump($files);

        return Command::SUCCESS;
    }
}
