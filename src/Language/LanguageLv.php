<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule3;
use Fisharebest\Localization\Territory\TerritoryLv;

/**
 * Class LanguageLv - Representation of the Latvian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageLv extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'lv';
    }

    public function defaultTerritory()
    {
        return new TerritoryLv();
    }

    public function pluralRule()
    {
        return new PluralRule3();
    }
}
