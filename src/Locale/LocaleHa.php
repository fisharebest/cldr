<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHa;

/**
 * Class LocaleHa - Hausa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleHa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Hausa';
    }

    public function endonymSortable()
    {
        return 'HAUSA';
    }

    public function language()
    {
        return new LanguageHa();
    }
}
