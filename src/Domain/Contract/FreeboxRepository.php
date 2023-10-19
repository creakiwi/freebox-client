<?php

namespace Creakiwi\Freebox\Domain\Contract;

use Creakiwi\Freebox\Domain\Model\Authentication\Session;

interface FreeboxRepository
{
    public function setSession(Session $session): void;
}
