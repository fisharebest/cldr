<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRoro - Representation of the Rongorongo script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptRoro extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Roro';
    }

    public function number()
    {
        return '620';
    }
}
