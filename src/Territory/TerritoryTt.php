<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TT - Trinidad and Tobago.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryTt extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'TT';
    }

    public function firstDay()
    {
        return 0;
    }
}
