<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGrek - Representation of the Greek script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptGrek extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Grek';
    }

    public function number()
    {
        return '200';
    }

    public function unicodeName()
    {
        return 'Greek';
    }
}
