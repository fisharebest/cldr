<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPlrd - Representation of the Miao (Pollard) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptPlrd extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Plrd';
    }

    public function number()
    {
        return '282';
    }

    public function unicodeName()
    {
        return 'Miao';
    }
}
