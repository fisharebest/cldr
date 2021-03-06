<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IO - British Indian Ocean AbstractTerritory.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryIo extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'IO';
    }
}
