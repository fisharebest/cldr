<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryVn;

/**
 * Class LanguageVi - Representation of the Vietnamese language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageVi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'vi';
    }

    public function defaultTerritory()
    {
        return new TerritoryVn();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
