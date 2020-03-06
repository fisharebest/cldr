<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleAaEr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleAaEr extends LocaleAa
{
    public function territory()
    {
        return new TerritoryEr();
    }
}
