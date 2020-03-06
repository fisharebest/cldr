<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNl;

/**
 * Class LocaleEnNl - English
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnNl extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNl();
    }
}
