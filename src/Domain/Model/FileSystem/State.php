<?php

namespace Creakiwi\Freebox\Domain\Model\FileSystem;

enum State: string
{
    case QUEUED = 'queued';
    case RUNNING = 'running';
    case PAUSED = 'paused';
    case DONE = 'done';
    case FAILED = 'failed';
}
