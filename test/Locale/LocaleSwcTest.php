<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSwc;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSwc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSwcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSwc();

        $this->assertEquals(new LanguageSwc(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryCd(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('swc_CD', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Kiswahili ya Kongo', $locale->endonym());
        $this->assertSame('lang="swc"', $locale->htmlAttributes());
        $this->assertSame('swc', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
