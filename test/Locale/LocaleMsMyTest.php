<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMs;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMy;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMsMy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleMsMyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMsMy();

        $this->assertEquals(new LanguageMs(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryMy(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ms_MY', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ms"', $locale->htmlAttributes());
        $this->assertSame('ms', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
