<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryFi;

/**
 * Class LanguageFi - Representation of the Finnish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageFi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'fi';
    }

    public function defaultTerritory()
    {
        return new TerritoryFi();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
