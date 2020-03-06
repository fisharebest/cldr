<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBez;

/**
 * Class LocaleBez - Bena
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleBez extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Hibena';
    }

    public function endonymSortable()
    {
        return 'HIBENA';
    }

    public function language()
    {
        return new LanguageBez();
    }
}
