<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHrkt - Representation of the Japanese syllabaries (alias for Hiragana + Katakana) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptHrkt extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hrkt';
    }

    public function number()
    {
        return '412';
    }

    public function unicodeName()
    {
        return 'Katakana_Or_Hiragana';
    }
}
