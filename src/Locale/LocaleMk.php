<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMk;

/**
 * Class LocaleMk - Macedonian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleMk extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'македонски';
    }

    public function endonymSortable()
    {
        return 'МАКЕДОНСКИ';
    }

    public function language()
    {
        return new LanguageMk();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
