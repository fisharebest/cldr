<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 001 - World.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class Territory001 extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return '001';
    }
}
