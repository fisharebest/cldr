<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEgyp - Representation of the Egyptian hieroglyphs script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptEgyp extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Egyp';
    }

    public function number()
    {
        return '050';
    }

    public function unicodeName()
    {
        return 'Egyptian_Hieroglyphs';
    }
}
