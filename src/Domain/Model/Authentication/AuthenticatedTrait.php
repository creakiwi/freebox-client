<?php

namespace Creakiwi\Freebox\Domain\Model\Authentication;

trait AuthenticatedTrait
{
    private SessionStart $session;

    public function setSession(SessionStart $session): void
    {
        $this->session = $session;
    }

    public function getSession(): SessionStart
    {
        return $this->session;
    }
}
