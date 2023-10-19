<?php

namespace Creakiwi\Freebox\Domain\Model\Authentication;

use Creakiwi\Freebox\Domain\Model\JsonPostInterface;

final class Identifiers implements JsonPostInterface
{
    private string $appToken;

    private int $trackId;

    public function __construct(
        private readonly string $appId,
        private readonly string $appName,
        private readonly string $appVersion,
        private readonly string $deviceName,
    ) {
    }

    public function toJsonPost(): array
    {
        return [
            'app_id' => $this->appId,
            'app_name' => $this->appName,
            'app_version' => $this->appVersion,
            'device_name' => $this->deviceName,
        ];
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    public function getAppName(): string
    {
        return $this->appName;
    }

    public function getAppVersion(): string
    {
        return $this->appVersion;
    }

    public function getDeviceName(): string
    {
        return $this->deviceName;
    }

    public function setAppToken(string $appToken): void
    {
        $this->appToken = $appToken;
    }

    public function getAppToken(): ?string
    {
        return $this->appToken;
    }

    public function setTrackId(int $trackId): void
    {
        $this->trackId = $trackId;
    }

    public function getTrackId(): ?int
    {
        return $this->trackId;
    }
}
