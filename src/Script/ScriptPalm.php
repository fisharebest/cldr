<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPalm - Representation of the Palmyrene script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptPalm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Palm';
    }

    public function number()
    {
        return '126';
    }

    public function unicodeName()
    {
        return 'Palmyrene';
    }
}
