<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTfng - Representation of the Tifinagh script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptTfng extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tfng';
    }

    public function number()
    {
        return '120';
    }

    public function unicodeName()
    {
        return 'Tifinagh';
    }
}
