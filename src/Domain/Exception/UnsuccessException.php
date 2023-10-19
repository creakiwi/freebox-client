<?php

namespace Creakiwi\Freebox\Domain\Exception;

class UnsuccessException extends DomainException
{
    public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct(sprintf('Api response issue: %s', $message), $code, $previous);
    }
}
