<?php

namespace Creakiwi\Freebox\Domain\Model\Authentication;

final class Progress
{
    private string $status;

    private string $challenge;

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setChallenge(string $challenge): void
    {
        $this->challenge = $challenge;
    }

    public function getChallenge(): string
    {
        return $this->challenge;
    }
}
