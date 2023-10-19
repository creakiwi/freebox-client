<?php

namespace Creakiwi\Freebox\Domain\Model\Authentication;

interface AuthenticatedInterface
{
    public function getSession(): SessionStart;
}
