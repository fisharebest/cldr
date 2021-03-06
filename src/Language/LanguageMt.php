<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule13;
use Fisharebest\Localization\Territory\TerritoryMt;

/**
 * Class LanguageMt - Representation of the Maltese language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageMt extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mt';
    }

    public function defaultTerritory()
    {
        return new TerritoryMt();
    }

    public function pluralRule()
    {
        return new PluralRule13();
    }
}
