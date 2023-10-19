<?php

namespace Creakiwi\Freebox\Infrastructure\Repository;

use Creakiwi\Freebox\Domain\Contract\FileSystemRepository as FileSystemRepositoryContract;
use Creakiwi\Freebox\Domain\Exception\NotImplementedException;
use Creakiwi\Freebox\Domain\Model\FileSystem\FileInfo;
use Creakiwi\Freebox\Domain\Model\FileSystem\Mkdir;
use Creakiwi\Freebox\Domain\Model\FileSystem\Task;
use Creakiwi\Freebox\Domain\Model\Response;

class FileSystemRepository extends AbstractRepository implements FileSystemRepositoryContract
{
    public function tasks(): array
    {
        throw new NotImplementedException();
    }

    public function task(Task $task): Task
    {
        throw new NotImplementedException();
    }

    public function updateTask(Task $task): Task
    {
        throw new NotImplementedException();
    }

    public function removeTask(Task $task): Response
    {
        throw new NotImplementedException();
    }

    public function ls(string $path = ''): array
    {
        return $this->get(FileInfo::class.'[]', 'v8/fs/ls/'.$path);
    }

    public function fileInfoByPath(string $path): FileInfo
    {
        return $this->get(FileInfo::class, 'v8/fs/info/'.$path);
    }

    public function fileInfo(FileInfo $fileInfo): FileInfo
    {
        return $this->fileInfoByPath($fileInfo->getPath());
    }

    public function mv(): Task
    {
        throw new NotImplementedException();
    }

    public function cp(): Task
    {
        throw new NotImplementedException();
    }

    public function rm(): Task
    {
        throw new NotImplementedException();
    }

    public function cat(): Task
    {
        throw new NotImplementedException();
    }

    public function zip(): Task
    {
        throw new NotImplementedException();
    }

    public function unzip(): Task
    {
        throw new NotImplementedException();
    }

    public function repair(): Task
    {
        throw new NotImplementedException();
    }

    public function calculateHash(): Task
    {
        throw new NotImplementedException();
    }

    public function hash(Task $task): Task
    {
        throw new NotImplementedException();
    }

    public function mkdir(Mkdir $mkdir): Response
    {
        return $this->post(Response::class, 'v8/fs/mkdir', ['json' => $mkdir->toJsonPost()], unserializeResponse: true);
    }

    public function rename(): Response
    {
        throw new NotImplementedException();
    }

    public function download(): Response
    {
        throw new NotImplementedException();
    }
}
