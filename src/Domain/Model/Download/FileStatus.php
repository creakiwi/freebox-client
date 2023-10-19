<?php

namespace Creakiwi\Freebox\Domain\Model\Download;

enum FileStatus: string
{
    case QUEUED = 'queued';
    case ERROR = 'error';
    case DONE = 'done';
}
