<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZyyy - Representation of the Code for undetermined script script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptZyyy extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Zyyy';
    }

    public function number()
    {
        return '998';
    }

    public function unicodeName()
    {
        return 'Common';
    }
}
