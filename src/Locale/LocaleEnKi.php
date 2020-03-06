<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKi;

/**
 * Class LocaleEnKi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnKi extends LocaleEn
{
    public function territory()
    {
        return new TerritoryKi();
    }
}
