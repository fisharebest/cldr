<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMgo;

/**
 * Class LocaleMgo - Metaʼ
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleMgo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'metaʼ';
    }

    public function endonymSortable()
    {
        return 'META';
    }

    public function language()
    {
        return new LanguageMgo();
    }
}
