<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKthi - Representation of the Kaithi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptKthi extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Kthi';
    }

    public function number()
    {
        return '317';
    }

    public function unicodeName()
    {
        return 'Kaithi';
    }
}
