<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LocaleEnTz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnTz extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTz();
    }
}
