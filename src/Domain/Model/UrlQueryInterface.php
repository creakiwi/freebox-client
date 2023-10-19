<?php

namespace Creakiwi\Freebox\Domain\Model;
interface UrlQueryInterface
{
    public function toUrlQuery(): string;
}
