<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhlp - Representation of the Psalter Pahlavi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptPhlp extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Phlp';
    }

    public function number()
    {
        return '132';
    }

    public function unicodeName()
    {
        return 'Psalter_Pahlavi';
    }
}
