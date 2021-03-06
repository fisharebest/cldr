<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHatr - Representation of the Hatran script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptHatr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hatr';
    }

    public function number()
    {
        return '127';
    }

    public function unicodeName()
    {
        return 'Hatran';
    }
}
