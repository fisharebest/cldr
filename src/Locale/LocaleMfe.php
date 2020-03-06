<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMfe;

/**
 * Class LocaleMfe - Morisyen
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleMfe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'kreol morisien';
    }

    public function endonymSortable()
    {
        return 'KREOL MORISIEN';
    }

    public function language()
    {
        return new LanguageMfe();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP => self::NBSP,
        );
    }
}
