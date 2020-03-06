<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMult - Representation of the  Multani script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptMult extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mult';
    }

    public function number()
    {
        return '323';
    }

    public function unicodeName()
    {
        return 'Multani';
    }
}
