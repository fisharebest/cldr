<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LanguageTi - Representation of the Tigrinya language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageTi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ti';
    }

    public function defaultScript()
    {
        return new ScriptEthi();
    }

    public function defaultTerritory()
    {
        return new TerritoryEt();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
