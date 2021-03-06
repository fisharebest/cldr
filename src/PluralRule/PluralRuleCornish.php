<?php

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRuleWelsh - Select a plural form for a specified number.
 * nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : (n == 3) ? 2 : 3;
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class PluralRuleCornish implements PluralRuleInterface
{
    public function plurals()
    {
        return 4;
    }

    public function plural($number)
    {
        $number = abs($number);

        if ($number === 1) {
            return 0;
        }

        if ($number === 2) {
            return 1;
        }

        if ($number === 3) {
            return 2;
        }

        return 3;
    }
}
