<?php

namespace Creakiwi\Freebox\Domain\Model\Authentication;

final class Challenge
{
    private bool $loggedIn;

    private string $challenge;

    public function setLoggedIn(bool $loggedIn): void
    {
        $this->loggedIn = $loggedIn;
    }

    public function isLoggedIn(): bool
    {
        return $this->loggedIn;
    }

    public function getChallenge(): string
    {
        return $this->challenge;
    }

    public function setChallenge(string $challenge): void
    {
        $this->challenge = $challenge;
    }
}
