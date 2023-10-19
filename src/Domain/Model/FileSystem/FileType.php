<?php

namespace Creakiwi\Freebox\Domain\Model\FileSystem;

enum FileType: string
{
    case DIR = 'dir';
    case FILE = 'file';
}
