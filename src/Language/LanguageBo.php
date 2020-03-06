<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryCn;

/**
 * Class LanguageBo - Representation of the Tibetan language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageBo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'bo';
    }

    public function defaultTerritory()
    {
        return new TerritoryCn();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
