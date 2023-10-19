<?php

namespace Creakiwi\Freebox\Infrastructure\Repository;

use Creakiwi\Freebox\Domain\Contract\LanguageRepository as LanguageRepositoryContract;
use Creakiwi\Freebox\Domain\Model\Language;
use Creakiwi\Freebox\Domain\Model\Response;

class LanguageRepository extends AbstractRepository implements LanguageRepositoryContract
{
    public function getLanguages(): Language
    {
        return $this->get(Language::class, 'v8/lang');
    }

    public function setLanguage(Language $language): Response
    {
        return $this->get(Response::class, 'v8/lang', ['json' => $language->toJsonPost()], unserializeResponse: true);
    }
}
