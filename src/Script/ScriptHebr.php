<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHebr - Representation of the Hebrew script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptHebr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hebr';
    }

    public function number()
    {
        return '125';
    }

    public function unicodeName()
    {
        return 'Hebrew';
    }
}
