<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEwo;

/**
 * Class LocaleEwo - Ewondo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEwo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ewondo';
    }

    public function endonymSortable()
    {
        return 'EWONDO';
    }

    public function language()
    {
        return new LanguageEwo();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
