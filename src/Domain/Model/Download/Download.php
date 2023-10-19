<?php

namespace Creakiwi\Freebox\Domain\Model\Download;

use Creakiwi\Freebox\Domain\Model\JsonPostInterface;

final class Download implements JsonPostInterface
{
    private readonly int $id;

    private readonly DownloadType $type;

    private readonly string $name;

    private DownloadStatus $status;

    private readonly int $size;

    private int $queuePos;

    private DownloadPriority $ioPriority;

    private readonly int $txBytes;

    private readonly int $rxBytes;

    private readonly int $txRate;

    private readonly int $rxRate;

    private readonly int $txPct;

    private readonly int $rxPct;

    private readonly string $error;

    private readonly int $createdTs;

    private readonly int $eta;

    private readonly string $downloadDir;

    private readonly int $stopRatio;

    private string $archivePassword;

    private string $infoHash;

    private int $pieceLength;

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

        $this->type = DownloadType::from($type);
    }

    public function getType(): DownloadType
    {
        return $this->type;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setStatus(string $status): void
    {
        $this->status = DownloadStatus::from($status);
    }

    public function getStatus(): DownloadStatus
    {
        return $this->status;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setQueuePos(int $queuePos): void
    {
        $this->queuePos = $queuePos;
    }

    public function getQueuePos(): int
    {
        return $this->queuePos;
    }

    public function setIoPriority(string $ioPriority): void
    {
        $this->ioPriority = DownloadPriority::from($ioPriority);
    }

    public function getIoPriority(): DownloadPriority
    {
        return $this->ioPriority;
    }

    public function setTxBytes(int $txBytes): void
    {
        $this->txBytes = $txBytes;
    }

    public function getTxBytes(): int
    {
        return $this->txBytes;
    }

    public function setRxBytes(int $rxBytes): void
    {
        $this->rxBytes = $rxBytes;
    }

    public function getRxBytes(): int
    {
        return $this->rxBytes;
    }

    public function setTxRate(int $txRate): void
    {
        $this->txRate = $txRate;
    }

    public function getTxRate(): int
    {
        return $this->txRate;
    }

    public function setRxRate($rxRate): void
    {
        $this->rxRate = $rxRate;
    }

    public function getRxRate()
    {
        return $this->rxRate;
    }

    public function setTxPct(int $txPct): void
    {
        $this->txPct = $txPct;
    }

    public function getTxPct(): int
    {
        return $this->txPct;
    }

    public function setRxPct(int $rxPct): void
    {
        $this->rxPct = $rxPct;
    }

    public function getRxPct(): int
    {
        return $this->rxPct;
    }

    public function setError(string $error): void
    {
        $this->error = $error;
    }

    public function getError(): string
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

    public function setEta(int $eta): void
    {
        $this->eta = $eta;
    }

    public function getEta(): int
    {
        return $this->eta;
    }

    public function setDownloadDir(string $downloadDir): void
    {
        $this->downloadDir = $downloadDir;
    }

    public function getDownloadDir(): string
    {
        return $this->downloadDir;
    }

    public function setStopRatio(int $stopRatio): void
    {
        $this->stopRatio = $stopRatio;
    }

    public function getStopRatio(): int
    {
        return $this->stopRatio;
    }

    public function setArchivePassword(string $archivePassword): void
    {
        $this->archivePassword = $archivePassword;
    }

    public function getArchivePassword(): string
    {
        return $this->archivePassword;
    }

    public function setInfoHash(string $infoHash): void
    {
        $this->infoHash = $infoHash;
    }

    public function getInfoHash(): string
    {
        return $this->infoHash;
    }

    public function setPieceLength(int $pieceLength): void
    {
        $this->pieceLength = $pieceLength;
    }

    public function getPieceLength(): int
    {
        return $this->pieceLength;
    }

    public function toJsonPost(): array
    {
        return [
            'status' => $this->status->value,
            'queue_pos' => $this->queuePos,
            'io_priority' => $this->ioPriority->value,
            'archive_password' => $this->archivePassword,
            'info_hash' => $this->infoHash,
            'piece_length' => $this->pieceLength,
        ];
    }
}
