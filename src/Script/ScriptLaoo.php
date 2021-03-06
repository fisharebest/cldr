<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLaoo - Representation of the Lao script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptLaoo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Laoo';
    }

    public function numerals()
    {
        return array('໐', '໑', '໒', '໓', '໔', '໕', '໖', '໗', '໘', '໙');
    }

    public function number()
    {
        return '356';
    }

    public function unicodeName()
    {
        return 'Lao';
    }
}
