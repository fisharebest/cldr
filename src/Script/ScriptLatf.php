<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLatf - Representation of the Latin (Fraktur variant) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptLatf extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Latf';
    }

    public function number()
    {
        return '217';
    }
}
