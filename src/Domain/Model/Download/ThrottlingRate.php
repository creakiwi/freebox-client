<?php

namespace Creakiwi\Freebox\Domain\Model\Download;

final class ThrottlingRate
{
    private int $rxRate;

    private int $txRate;

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
}
