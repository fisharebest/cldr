<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPauc - Representation of the Pau Cin Hau script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptPauc extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Pauc';
    }

    public function number()
    {
        return '263';
    }

    public function unicodeName()
    {
        return 'Pau_Cin_Hau';
    }
}
