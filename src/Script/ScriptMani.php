<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMani - Representation of the Manichaean script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptMani extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mani';
    }

    public function number()
    {
        return '139';
    }

    public function unicodeName()
    {
        return 'Manichaean';
    }
}
