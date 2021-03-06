<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUg;

/**
 * Class LocaleUg - Uyghur
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleUg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ئۇيغۇرچە';
    }

    public function language()
    {
        return new LanguageUg();
    }
}
