<?php

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRuleZeroOneOther - Select a plural form for a specified number.
 * nplurals=4; plural=(n==0) ? 0 : (n==1) ? 1 : 2;
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class PluralRuleZeroOneOther implements PluralRuleInterface
{
    public function plurals()
    {
        return 3;
    }

    public function plural($number)
    {
        $number = abs($number);

        if ($number === 0) {
            return 0;
        }

        if ($number === 1) {
            return 1;
        }

        return 2;
    }
}
