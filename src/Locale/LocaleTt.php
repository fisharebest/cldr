<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTt;

/**
 * Class LocaleTt - Tatar
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'татар';
    }

    public function endonymSortable()
    {
        return 'ТАТАР';
    }

    public function language()
    {
        return new LanguageTt();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
