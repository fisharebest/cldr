<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLoma - Representation of the Loma script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptLoma extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Loma';
    }

    public function number()
    {
        return '437';
    }
}
