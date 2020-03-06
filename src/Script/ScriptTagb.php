<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTagb - Representation of the Tagbanwa script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptTagb extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tagb';
    }

    public function number()
    {
        return '373';
    }

    public function unicodeName()
    {
        return 'Tagbanwa';
    }
}
