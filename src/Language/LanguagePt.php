<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryPt;

/**
 * Class LanguagePt - Representation of the Portuguese language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguagePt extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'pt';
    }

    public function defaultTerritory()
    {
        return new TerritoryPt();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
