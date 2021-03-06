<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LanguageEn - Representation of the Anglo-Saxon / Old-English language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageAng extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ang';
    }

    public function defaultTerritory()
    {
        return new TerritoryGb();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
