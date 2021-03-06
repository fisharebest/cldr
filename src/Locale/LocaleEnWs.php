<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryWs;

/**
 * Class LocaleEnWs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnWs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryWs();
    }
}
