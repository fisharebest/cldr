<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMx;

/**
 * Class LocaleEsMx - Mexican Spanish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsMx extends LocaleEs
{
    public function endonym()
    {
        return 'español de México';
    }

    public function endonymSortable()
    {
        return 'ESPANOL DE MEXICO';
    }

    public function territory()
    {
        return new TerritoryMx();
    }
}
