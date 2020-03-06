<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageDyo - Representation of the Jola-Fonyi language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageDyo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'dyo';
    }

    public function defaultTerritory()
    {
        return new TerritorySn();
    }
}
