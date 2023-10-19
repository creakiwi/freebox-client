<?php

namespace Creakiwi\Freebox\Domain\Model\Authentication;

interface ChallengeInterface
{
    public function getChallenge(): Challenge;
}
