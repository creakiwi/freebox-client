<?php

namespace Creakiwi\Freebox\Domain\Model;

use Creakiwi\Freebox\Domain\Model\Authentication\AuthenticatedTrait;

final class Language implements JsonPostInterface
{
    use AuthenticatedTrait;

    private string $lang;

    private readonly array $avalaible;

    /**
     * @param string $lang
     */
    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    public function setLanguage(string $lang): void
    {
        $this->setLang($lang);
    }

    public function getCurrentLanguage(): string
    {
        return $this->lang;
    }

    public function setAvalaible(array $avalaible): void
    {
        $this->avalaible = $avalaible;
    }

    public function getAvailableLanguages(): array
    {
        return $this->avalaible;
    }

    public function toJsonPost(): array
    {
        return [
            'lang' => $this->lang,
        ];
    }
}
