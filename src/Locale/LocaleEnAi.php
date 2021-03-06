<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAi;

/**
 * Class LocaleEnAi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnAi extends LocaleEn
{
    public function territory()
    {
        return new TerritoryAi();
    }
}
