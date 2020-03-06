<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFur;

/**
 * Class LocaleFur - Friulian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFur extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'furlan';
    }

    public function endonymSortable()
    {
        return 'FURLAN';
    }

    public function language()
    {
        return new LanguageFur();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
