<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBem;

/**
 * Class LocaleBem - Bemba
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleBem extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ichibemba';
    }

    public function endonymSortable()
    {
        return 'ICHIBEMBA';
    }

    public function language()
    {
        return new LanguageBem();
    }
}
