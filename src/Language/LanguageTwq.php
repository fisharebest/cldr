<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LanguageTwq - Representation of the Tasawaq language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageTwq extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'twq';
    }

    public function defaultTerritory()
    {
        return new TerritoryNe();
    }
}
