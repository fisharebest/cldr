<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLr;

/**
 * Class LocaleFfLatn - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFfLatnLr extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryLr();
    }
}
