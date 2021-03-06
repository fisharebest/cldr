<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDje;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryNe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleDje class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleDjeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleDje();

        $this->assertEquals(new LanguageDje(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryNe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('dje_NE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Zarmaciine', $locale->endonym());
        $this->assertSame('lang="dje"', $locale->htmlAttributes());
        $this->assertSame('dje', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678.09', $locale->number(12345678.09));
        $this->assertSame('1 234.56%', $locale->percent(12.3456));
    }
}
