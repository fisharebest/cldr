<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUk;

/**
 * Class LocaleUk - Ukrainian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleUk extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'українська';
    }

    public function endonymSortable()
    {
        return 'УКРАЇНСЬКА';
    }

    public function language()
    {
        return new LanguageUk();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
