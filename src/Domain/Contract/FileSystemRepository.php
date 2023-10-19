<?php

namespace Creakiwi\Freebox\Domain\Contract;

use Creakiwi\Freebox\Domain\Model\FileSystem\FileInfo;
use Creakiwi\Freebox\Domain\Model\FileSystem\Mkdir;
use Creakiwi\Freebox\Domain\Model\FileSystem\Task;
use Creakiwi\Freebox\Domain\Model\Response;

interface FileSystemRepository extends FreeboxRepository
{
    public function tasks(): ?array;

    public function task(Task $task): Task;

    public function updateTask(Task $task): Task;

    public function removeTask(Task $task): Response;

    public function ls(string $path = ''): array;

    public function fileInfoByPath(string $path): FileInfo;

    public function fileInfo(FileInfo $fileInfo): FileInfo;

    public function mv(): Task;

    public function cp(): Task;

    public function rm(): Task;

    public function cat(): Task;

    public function zip(): Task;

    public function unzip(): Task;

    public function repair(): Task;

    public function calculateHash(): Task;

    public function hash(Task $task): Task;

    public function mkdir(Mkdir $mkdir): Response;

    public function rename(): Response;

    public function download(): Response;
}
