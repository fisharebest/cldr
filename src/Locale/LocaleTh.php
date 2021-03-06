<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTh;

/**
 * Class LocaleTh - Thai
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ไทย';
    }

    public function language()
    {
        return new LanguageTh();
    }
}
