<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryId;

/**
 * Class LanguageId - Representation of the Indonesian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageId extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'id';
    }

    public function defaultTerritory()
    {
        return new TerritoryId();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
