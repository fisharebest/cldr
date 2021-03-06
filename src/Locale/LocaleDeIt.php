<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LocaleDeCh - Swiss High German
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleDeIt extends LocaleDe
{
    public function territory()
    {
        return new TerritoryIt();
    }
}
