<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory VA - Holy See (Vatican City State).
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryVa extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'VA';
    }
}
