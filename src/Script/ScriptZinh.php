<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZinh - Representation of the Code for inherited script script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptZinh extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Zinh';
    }

    public function number()
    {
        return '994';
    }

    public function unicodeName()
    {
        return 'Inherited';
    }
}
