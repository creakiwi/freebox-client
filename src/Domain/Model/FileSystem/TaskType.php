<?php

namespace Creakiwi\Freebox\Domain\Model\FileSystem;

enum TaskType: string
{
    case CAT = 'cat';
    case CP = 'cp';
    case MV = 'mv';
    case RM = 'rm';
    case ARCHIVE = 'archive';
    case EXTRACT = 'extract';
    case REPAIR = 'repair';
}
