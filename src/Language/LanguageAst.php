<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEs;

/**
 * Class LanguageAst - Representation of the Asturian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageAst extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ast';
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
