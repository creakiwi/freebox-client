<?php

namespace Creakiwi\Freebox\Domain\Model\Download;

use Creakiwi\Freebox\Domain\Model\JsonPostInterface;

final class File implements JsonPostInterface
{
    private string $id;

    private int $taskId;

    private string $path;

    private string $filepath;

    private string $name;

    private string $mimetype;

    private int $size;

    private int $rx;

    private FileStatus $status;

    private FileError $error;

    private FilePriority $priority;

    private string $previewUrl;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setTaskId(int $taskId): void
    {
        $this->taskId = $taskId;
    }

    public function getTaskId(): int
    {
        return $this->taskId;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setFilepath(string $filepath): void
    {
        $this->filepath = $filepath;
    }

    public function getFilepath(): string
    {
        return $this->filepath;
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

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setRx(int $rx): void
    {
        $this->rx = $rx;
    }

    public function getRx(): int
    {
        return $this->rx;
    }

    public function setStatus(string $status): void
    {
        $this->status = FileStatus::from($status);
    }

    public function getStatus(): FileStatus
    {
        return $this->status;
    }

    public function setError(string $error): void
    {
        $this->error = FileError::from($error);
    }

    public function getError(): FileError
    {
        return $this->error;
    }

    public function setPriority(string $priority): void
    {
        $this->priority = FilePriority::from($priority);
    }

    public function getPriority(): FilePriority
    {
        return $this->priority;
    }

    public function setPreviewUrl(string $previewUrl): void
    {
        $this->previewUrl = $previewUrl;
    }

    public function getPreviewUrl(): string
    {
        return $this->previewUrl;
    }

    public function toJsonPost(): array
    {
        return [
            'priority' => $this->priority->value,
        ];
    }
}
