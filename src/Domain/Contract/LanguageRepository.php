<?php

namespace Creakiwi\Freebox\Domain\Contract;

use Creakiwi\Freebox\Domain\Model\Language;
use Creakiwi\Freebox\Domain\Model\Response;

interface LanguageRepository extends FreeboxRepository
{
    public function getLanguages(): Language;

    public function setLanguage(Language $language): Response;
}
