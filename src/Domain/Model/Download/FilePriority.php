<?php

namespace Creakiwi\Freebox\Domain\Model\Download;

enum FilePriority: string
{
    case NO_DL = 'no_dl';
    case LOW = 'low';
    case NORMAL = 'normal';
    case HIGH = 'high';
}
