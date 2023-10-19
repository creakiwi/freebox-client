<?php

namespace Creakiwi\Freebox\Domain\Model\Download;

final class Stats
{
    private readonly int $nbTasks;

    private readonly int $nbTasksStopped;

    private readonly int $nbTasksChecking;

    private readonly int $nbTasksQueued;

    private readonly int $nbTasksExtracting;

    private readonly int $nbTasksDone;

    private readonly int $nbTasksRepairing;

    private readonly int $nbTasksSeeding;

    private readonly int $nbTasksDownloading;

    private readonly int $nbTasksError;

    private readonly int $nbTasksStopping;

    private readonly int $nbTasksActive;

    private readonly int $nbRss;

    private readonly int $nbRssItemsUnread;

    private readonly int $rxRate;

    private readonly int $txRate;

    private readonly string $throttlingMode;

    private readonly bool $throttlingIsScheduled;

    private readonly array $throttlingRate;

    private readonly array $nzbConfigStatus;

    private readonly bool $connReady;

    private readonly int $nbPeer;

    private readonly int $blocklistEntries;

    private readonly int $blocklistHits;

    private readonly array $dhtStats;

    public function setNbTasks(int $nbTasks): void
    {
        $this->nbTasks = $nbTasks;
    }

    public function getNbTasks(): int
    {
        return $this->nbTasks;
    }

    public function setNbTasksStopped(int $nbTasksStopped): void
    {
        $this->nbTasksStopped = $nbTasksStopped;
    }

    public function getNbTasksStopped(): int
    {
        return $this->nbTasksStopped;
    }

    public function setNbTasksChecking(int $nbTasksChecking): void
    {
        $this->nbTasksChecking = $nbTasksChecking;
    }

    public function getNbTasksChecking(): int
    {
        return $this->nbTasksChecking;
    }

    public function setNbTasksQueued(int $nbTasksQueued): void
    {
        $this->nbTasksQueued = $nbTasksQueued;
    }

    public function getNbTasksQueued(): int
    {
        return $this->nbTasksQueued;
    }

    public function setNbTasksExtracting(int $nbTasksExtracting): void
    {
        $this->nbTasksExtracting = $nbTasksExtracting;
    }

    public function getNbTasksExtracting(): int
    {
        return $this->nbTasksExtracting;
    }

    public function setNbTasksDone(int $nbTasksDone): void
    {
        $this->nbTasksDone = $nbTasksDone;
    }

    public function getNbTasksDone(): int
    {
        return $this->nbTasksDone;
    }

    public function setNbTasksRepairing(int $nbTasksRepairing): void
    {
        $this->nbTasksRepairing = $nbTasksRepairing;
    }

    public function getNbTasksRepairing(): int
    {
        return $this->nbTasksRepairing;
    }

    public function setNbTasksSeeding(int $nbTasksSeeding): void
    {
        $this->nbTasksSeeding = $nbTasksSeeding;
    }

    public function getNbTasksSeeding(): int
    {
        return $this->nbTasksSeeding;
    }

    public function setNbTasksDownloading(int $nbTasksDownloading): void
    {
        $this->nbTasksDownloading = $nbTasksDownloading;
    }

    public function getNbTasksDownloading(): int
    {
        return $this->nbTasksDownloading;
    }

    public function setNbTasksError(int $nbTasksError): void
    {
        $this->nbTasksError = $nbTasksError;
    }

    public function getNbTasksError(): int
    {
        return $this->nbTasksError;
    }

    public function setNbTasksStopping(int $nbTasksStopping): void
    {
        $this->nbTasksStopping = $nbTasksStopping;
    }

    public function getNbTasksStopping(): int
    {
        return $this->nbTasksStopping;
    }

    public function setNbTasksActive(int $nbTasksActive): void
    {
        $this->nbTasksActive = $nbTasksActive;
    }

    public function getNbTasksActive(): int
    {
        return $this->nbTasksActive;
    }

    public function setNbRss(int $nbRss): void
    {
        $this->nbRss = $nbRss;
    }

    public function getNbRss(): int
    {
        return $this->nbRss;
    }

    public function setNbRssItemsUnread(int $nbRssItemsUnread): void
    {
        $this->nbRssItemsUnread = $nbRssItemsUnread;
    }

    public function getNbRssItemsUnread(): int
    {
        return $this->nbRssItemsUnread;
    }

    public function setRxRate(int $rxRate): void
    {
        $this->rxRate = $rxRate;
    }

    public function getRxRate(): int
    {
        return $this->rxRate;
    }

    public function setTxRate(int $txRate): void
    {
        $this->txRate = $txRate;
    }

    public function getTxRate(): int
    {
        return $this->txRate;
    }

    public function setThrottlingMode(string $throttlingMode): void
    {
        $this->throttlingMode = $throttlingMode;
    }

    public function getThrottlingMode(): string
    {
        return $this->throttlingMode;
    }

    public function setThrottlingIsScheduled(bool $throttlingIsScheduled): void
    {
        $this->throttlingIsScheduled = $throttlingIsScheduled;
    }

    public function isThrottlingIsScheduled(): bool
    {
        return $this->throttlingIsScheduled;
    }

    public function setThrottlingRate(array $throttlingRate): void
    {
        $this->throttlingRate = $throttlingRate;
    }

    public function getThrottlingRate(): array
    {
        return $this->throttlingRate;
    }

    public function setNzbConfigStatus(array $nzbConfigStatus): void
    {
        $this->nzbConfigStatus = $nzbConfigStatus;
    }

    public function getNzbConfigStatus(): array
    {
        return $this->nzbConfigStatus;
    }

    public function setConnReady(bool $connReady): void
    {
        $this->connReady = $connReady;
    }

    public function isConnReady(): bool
    {
        return $this->connReady;
    }

    public function setNbPeer(int $nbPeer): void
    {
        $this->nbPeer = $nbPeer;
    }

    public function getNbPeer(): int
    {
        return $this->nbPeer;
    }

    public function setBlocklistEntries(int $blocklistEntries): void
    {
        $this->blocklistEntries = $blocklistEntries;
    }

    public function getBlocklistEntries(): int
    {
        return $this->blocklistEntries;
    }

    public function setBlocklistHits(int $blocklistHits): void
    {
        $this->blocklistHits = $blocklistHits;
    }

    public function getBlocklistHits(): int
    {
        return $this->blocklistHits;
    }

    public function setDhtStats(array $dhtStats): void
    {
        $this->dhtStats = $dhtStats;
    }

    public function getDhtStats(): array
    {
        return $this->dhtStats;
    }
}
