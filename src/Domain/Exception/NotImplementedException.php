<?php

namespace Creakiwi\Freebox\Domain\Exception;

class NotImplementedException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct(sprintf('Method not implemented: %s:%d', $this->file, $this->line), $code, $previous);
    }
}
