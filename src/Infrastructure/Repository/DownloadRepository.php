<?php

namespace Creakiwi\Freebox\Infrastructure\Repository;

use Creakiwi\Freebox\Domain\Contract\DownloadRepository as DownloadRepositoryContract;
use Creakiwi\Freebox\Domain\Model\Download\Download;
use Creakiwi\Freebox\Domain\Model\Download\File;
use Creakiwi\Freebox\Domain\Model\Download\Stats;
use Creakiwi\Freebox\Domain\Model\Response;

class DownloadRepository extends AbstractRepository implements DownloadRepositoryContract
{
    public function all(): array
    {
        return $this->get(Download::class.'[]', 'v8/downloads/');
    }

    public function id(Download $download): Download
    {
        return $this->get(Download::class, sprintf('v8/downloads/%d', $download->getId()));
    }

    public function remove(Download $download): Response
    {
        return $this->delete(Response::class, sprintf('v8/downloads/%d', $download->getId()), unserializeResponse: true);
    }

    public function erase(Download $download): Response
    {
        return $this->delete(Response::class, sprintf('v8/downloads/%d/erase', $download->getId()), unserializeResponse: true);
    }

    public function update(Download $download): Download
    {
        return $this->put(Download::class, sprintf('v8/downloads/%d', $download->getId()), ['json' => $download->toJsonPost()], $download);
    }

    public function log(Download $download): Response
    {
        return $this->get(Response::class, sprintf('v8/downloads/%d/log', $download->getId()), unserializeResponse: true);
    }

//    public function add(): mixed;

    public function stats(): Stats
    {
        return $this->get(Stats::class, 'v8/downloads/stats');
    }

    public function files(Download $download): array
    {
        return $this->get(File::class.'[]', sprintf('v8/downloads/%d/files', $download->getId()));
    }

    public function updateFile(File $file): Response
    {
        return $this->put(Response::class, sprintf('v8/downloads/%d/files/%s', $file->getTaskId(), $file->getId()), ['json' => $file->toJsonPost()], unserializeResponse: true);
    }
}
