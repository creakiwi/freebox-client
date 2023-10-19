<?php

namespace Creakiwi\Freebox\Domain\Model\Authentication;

use Creakiwi\Freebox\Domain\Model\JsonPostInterface;

final class Session implements IdentifiersInterface, JsonPostInterface
{
    private string $sessionToken;

    private string $passwordSalt;

    private array $permissions;

    public function __construct(private Identifiers $identifiers, private string $challenge)
    {
    }

    public function getIdentifiers(): Identifiers
    {
        return $this->identifiers;
    }

    public function setSessionToken(string $sessionToken): void
    {
        $this->sessionToken = $sessionToken;
    }

    public function getSessionToken(): string
    {
        return $this->sessionToken;
    }

    public function setChallenge(string $challenge): void
    {
        $this->challenge = $challenge;
    }

    public function getChallenge(): string
    {
        return $this->challenge;
    }

    public function setPasswordSalt(string $passwordSalt): void
    {
        $this->passwordSalt = $passwordSalt;
    }

    public function getPasswordSalt(): string
    {
        return $this->passwordSalt;
    }

    public function setPermissions(array $permissions): void
    {
        $this->permissions = $permissions;
    }

    public function getPermissions(): array
    {
        return $this->permissions;
    }

    public function toJsonPost(): array
    {
        return [
            'app_id' => $this->identifiers->getAppId(),
            'password' => hash_hmac('sha1', $this->challenge, $this->identifiers->getAppToken()),
        ];
    }
}
