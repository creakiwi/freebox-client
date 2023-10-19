<?php

namespace Creakiwi\Freebox\Domain\Model;

final class Response
{
    private bool $success;

    private mixed $result;

    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function setResult(mixed $result): void
    {
        $this->result = $result;
    }

    public function getResult(): mixed
    {
        return $this->result;
    }
}
