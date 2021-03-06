<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryMn;

/**
 * Class LanguageMn - Representation of the Mongolian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageMn extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mn';
    }

    public function defaultTerritory()
    {
        return new TerritoryMn();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
