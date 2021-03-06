<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPerm - Representation of the Old Permic script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptPerm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Perm';
    }

    public function number()
    {
        return '227';
    }

    public function unicodeName()
    {
        return 'Old_Permic';
    }
}
