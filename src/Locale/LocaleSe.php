<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSe;

/**
 * Class LocaleSe - Northern Sami
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'davvisámegiella';
    }

    public function endonymSortable()
    {
        return 'DAVVISAMEGIELLA';
    }

    public function language()
    {
        return new LanguageSe();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
