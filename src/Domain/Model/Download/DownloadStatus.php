<?php

namespace Creakiwi\Freebox\Domain\Model\Download;
enum DownloadStatus: string
{
    case STOPPED = 'stopped';
    case QUEUED = 'queued';
    case STARTING = 'starting';
    case DOWNLOADING = 'downloading';
    case STOPPING = 'stopping';
    case ERROR = 'error';
    case DONE = 'done';
    case CHECKING = 'checking';
    case REPAIRING = 'repairing';
    case EXTRACTING = 'extracting';
    case SEEDING = 'seeding';
    case RETRY = 'retry';
}
