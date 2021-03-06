<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKa;

/**
 * Class LocaleKa - Georgian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ქართული';
    }

    public function language()
    {
        return new LanguageKa();
    }

    protected function minimumGroupingDigits()
    {
        return 2;
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
