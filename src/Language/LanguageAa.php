<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LanguageAa - Representation of the Afar language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageAa extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'aa';
    }

    public function defaultTerritory()
    {
        return new TerritoryEt();
    }
}
