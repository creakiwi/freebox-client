<?php

namespace Creakiwi\Freebox\Infrastructure\Repository;


use Creakiwi\Freebox\Domain\Contract\AuthenticationRepository as AuthenticationRepositoryContract;
use Creakiwi\Freebox\Domain\Model\Authentication\Challenge;
use Creakiwi\Freebox\Domain\Model\Authentication\Progress;
use Creakiwi\Freebox\Domain\Model\Authentication\Identifiers;
use Creakiwi\Freebox\Domain\Model\Authentication\Session;
use Creakiwi\Freebox\Domain\Model\NoContent;
use Creakiwi\Freebox\Domain\Model\Response;

class AuthenticationRepository extends AbstractRepository implements AuthenticationRepositoryContract
{
    private const PREFIX = 'v8/login/';
    private const AUTHORIZE = 'authorize';
    private const PROGRESS = 'authorize/%d';
    private const SESSION_START = 'session';
    private const SESSION_CLOSE = 'logout';

    public function authorize(Identifiers $identifiers): Identifiers
    {
        $url = $this->getUrl(self::AUTHORIZE);

        return $this->post(Identifiers::class, $url, ['json' => $identifiers->toJsonPost()], $identifiers, authenticated: false);
    }

    public function progress(Identifiers $identifiers): Progress
    {
        $url = $this->getUrl(self::PROGRESS, $identifiers->getTrackId());

        return $this->get(Progress::class, $url, authenticated: false);
    }

    public function challenge(): Challenge
    {
        return $this->get(Challenge::class, $this->getUrl(''), authenticated: false);
    }

    public function sessionStart(Session $session): Session
    {
        $url = $this->getUrl(self::SESSION_START);

        return $this->post(Session::class, $url, ['json' => $session->toJsonPost()], $session, authenticated: false);
    }

    public function sessionClose(): Response
    {
        return $this->post(NoContent::class, $this->getUrl(self::SESSION_CLOSE), authenticated: false, unserializeResponse: true);
    }

    private function getUrl(string $pattern, ...$vars): string
    {
        return vsprintf(self::PREFIX.$pattern, $vars);
    }
}
