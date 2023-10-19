<?php

namespace Creakiwi\Freebox\Domain\Model\FileSystem;
use Creakiwi\Freebox\Domain\Model\JsonPostInterface;

class Mkdir implements JsonPostInterface
{
    public function __construct(private FileInfo $parent, private string $dirname)
    {
    }

    public function toJsonPost(): array
    {
        return [
            'parent' => $this->parent->getPath(),
            'dirname' => $this->dirname,
        ];
    }
}
