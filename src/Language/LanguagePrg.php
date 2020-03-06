<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule3;
use Fisharebest\Localization\Territory\Territory001;

/**
 * Class LanguagePrg - Representation of the Old Prussian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguagePrg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'prg';
    }

    public function pluralRule()
    {
        return new PluralRule3();
    }
}
