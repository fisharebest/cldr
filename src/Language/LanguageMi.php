<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryNz;

/**
 * Class LanguageEn - Representation of the Maori language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageMi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mi';
    }

    public function defaultTerritory()
    {
        return new TerritoryNz();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
