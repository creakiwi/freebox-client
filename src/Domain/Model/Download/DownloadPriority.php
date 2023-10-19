<?php

namespace Creakiwi\Freebox\Domain\Model\Download;

enum DownloadPriority: string
{
    case LOW = 'low';
    case NORMAL = 'normal';
    case HIGH = 'high';
}
