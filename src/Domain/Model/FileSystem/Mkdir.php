<?php

namespace Creakiwi\Freebox\Domain\Model\FileSystem;
use Creakiwi\Freebox\Domain\Model\JsonPostInterface;

final class Mkdir implements JsonPostInterface
{
    public function __construct(private readonly FileInfo $parent, private readonly string $dirname)
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
