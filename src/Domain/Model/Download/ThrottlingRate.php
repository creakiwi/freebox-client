<?php

namespace Creakiwi\Freebox\Domain\Model\Download;

final class ThrottlingRate
{
    private readonly int $rxRate;

    private readonly int $txRate;
}
