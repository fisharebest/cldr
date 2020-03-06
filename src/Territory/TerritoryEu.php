<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EU - European Union.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryEu extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'EU';
    }
}
