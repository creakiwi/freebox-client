<?php

namespace Creakiwi\Freebox\Domain\Model\FileSystem;

final class Task
{
    private readonly int $id;

    private readonly TaskType $type;

    private State $state;

    private readonly Error $error;

    private readonly int $createdTs;

    private readonly int $startedTs;

    private readonly int $doneTs;

    private readonly int $duration;

    private readonly int $progress;

    private readonly int $eta;

    private readonly string $from;

    private readonly string $to;

    private readonly int $nfiles;

    private readonly int $nfilesDone;

    private readonly int $totalBytes;

    private readonly int $totalBytesDone;

    private readonly int $currBytes;

    private readonly int $currBytesDone;

    private readonly int $rate;

    /**
     * @var string[]
     */
    private readonly array $src;

    private readonly string $dst;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setType(string $type): void
    {
        $this->type = TaskType::from($type);
    }

    public function getType(): TaskType
    {
        return $this->type;
    }

    public function setState(string $state): void
    {
        $this->state = State::from($state);
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function setError(string $error): void
    {
        $this->error = Error::from($error);
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function setCreatedTs(int $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    public function getCreatedTs(): int
    {
        return $this->createdTs;
    }

    public function setStartedTs(int $startedTs): void
    {
        $this->startedTs = $startedTs;
    }

    public function getStartedTs(): int
    {
        return $this->startedTs;
    }

    public function setDoneTs(int $doneTs): void
    {
        $this->doneTs = $doneTs;
    }

    public function getDoneTs(): int
    {
        return $this->doneTs;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setProgress(int $progress): void
    {
        $this->progress = $progress;
    }

    public function getProgress(): int
    {
        return $this->progress;
    }

    public function setEta(int $eta): void
    {
        $this->eta = $eta;
    }

    public function getEta(): int
    {
        return $this->eta;
    }

    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    public function getTo(): string
    {
        return $this->to;
    }

    public function setNfiles(int $nfiles): void
    {
        $this->nfiles = $nfiles;
    }

    public function getNfiles(): int
    {
        return $this->nfiles;
    }

    public function setNfilesDone(int $nfilesDone): void
    {
        $this->nfilesDone = $nfilesDone;
    }

    public function getNfilesDone(): int
    {
        return $this->nfilesDone;
    }

    public function setTotalBytes(int $totalBytes): void
    {
        $this->totalBytes = $totalBytes;
    }

    public function getTotalBytes(): int
    {
        return $this->totalBytes;
    }

    public function setTotalBytesDone(int $totalBytesDone): void
    {
        $this->totalBytesDone = $totalBytesDone;
    }

    public function getTotalBytesDone(): int
    {
        return $this->totalBytesDone;
    }

    public function setCurrBytes(int $currBytes): void
    {
        $this->currBytes = $currBytes;
    }

    public function getCurrBytes(): int
    {
        return $this->currBytes;
    }

    public function setCurrBytesDone(int $currBytesDone): void
    {
        $this->currBytesDone = $currBytesDone;
    }

    public function getCurrBytesDone(): int
    {
        return $this->currBytesDone;
    }

    public function setRate(int $rate): void
    {
        $this->rate = $rate;
    }

    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * @param string[] $src
     */
    public function setSrc(array $src): void
    {
        $this->src = $src;
    }

    /**
     * @return string[]
     */
    public function getSrc(): array
    {
        return $this->src;
    }

    public function setDst(string $dst): void
    {
        $this->dst = $dst;
    }

    public function getDst(): string
    {
        return $this->dst;
    }
}
