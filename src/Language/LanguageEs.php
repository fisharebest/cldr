<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEs;

/**
 * Class LanguageEs - Representation of the Spanish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageEs extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'es';
    }

    public function defaultTerritory()
    {
        return new TerritoryEs();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
