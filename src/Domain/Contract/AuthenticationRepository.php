<?php

namespace Creakiwi\Freebox\Domain\Contract;

use Creakiwi\Freebox\Domain\Model\Authentication\Challenge;
use Creakiwi\Freebox\Domain\Model\Authentication\Identifiers;
use Creakiwi\Freebox\Domain\Model\Authentication\Progress;
use Creakiwi\Freebox\Domain\Model\Authentication\Session;
use Creakiwi\Freebox\Domain\Model\NoContent;
use Creakiwi\Freebox\Domain\Model\Response;

interface AuthenticationRepository extends FreeboxRepository
{
    public function authorize(Identifiers $identifiers): Identifiers;

    public function progress(Identifiers $identifiers): Progress;

    public function challenge(): Challenge;

    public function sessionStart(Session $session): Session;

    public function sessionClose(): Response;
}
