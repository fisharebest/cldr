<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGa;

/**
 * Class LocaleFrGa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrGa extends LocaleFr
{
    public function territory()
    {
        return new TerritoryGa();
    }
}
