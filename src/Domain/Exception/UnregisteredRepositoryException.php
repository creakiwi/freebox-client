<?php

namespace Creakiwi\Freebox\Domain\Exception;

class UnregisteredRepositoryException extends DomainException
{
    public function __construct(string $repository, int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct(sprintf('Repository "%s" is not registered.', $repository), $code, $previous);
    }
}
