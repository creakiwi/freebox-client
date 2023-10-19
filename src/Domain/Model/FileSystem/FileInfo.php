<?php

namespace Creakiwi\Freebox\Domain\Model\FileSystem;

final class FileInfo
{
    private string $path;

    private string $readablePath;

    private string $name;

    private string $mimetype;

    private FileType $type;

    private int $size;

    private int $modification;

    private int $index;

    private bool $link;

    private string $target;

    private bool $hidden;

    private int $folderaccount;

    private int $filecount;

    public function setPath(string $path): void
    {
        $this->path = $path;
        $this->readablePath = base64_decode($path);
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getReadablePath(): string
    {
        return $this->readablePath;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setMimetype(string $mimetype): void
    {
        $this->mimetype = $mimetype;
    }

    public function getMimetype(): string
    {
        return $this->mimetype;
    }

    public function setType(string $type): void
    {
        $this->type = FileType::from($type);
    }

    public function getType(): FileType
    {
        return $this->type;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setModification(int $modification): void
    {
        $this->modification = $modification;
    }

    public function getModification(): int
    {
        return $this->modification;
    }

    public function setIndex(int $index): void
    {
        $this->index = $index;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setLink(bool $link): void
    {
        $this->link = $link;
    }

    public function isLink(): bool
    {
        return $this->link;
    }

    public function setTarget(string $target): void
    {
        $this->target = $target;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function setHidden(bool $hidden): void
    {
        $this->hidden = $hidden;
    }

    public function isHidden(): bool
    {
        return $this->hidden;
    }

    public function setFolderaccount(int $folderaccount): void
    {
        $this->folderaccount = $folderaccount;
    }

    public function getFolderaccount(): int
    {
        return $this->folderaccount;
    }

    public function setFilecount(int $filecount): void
    {
        $this->filecount = $filecount;
    }

    public function getFilecount(): int
    {
        return $this->filecount;
    }
}
