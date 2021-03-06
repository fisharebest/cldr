<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCx;

/**
 * Class LocaleEnCx
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnCx extends LocaleEn
{
    public function territory()
    {
        return new TerritoryCx();
    }
}
