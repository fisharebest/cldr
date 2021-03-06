<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKm;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKhmr;
use Fisharebest\Localization\Territory\TerritoryKh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKmKh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKmKhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKmKh();

        $this->assertEquals(new LanguageKm(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptKhmr(), $locale->script());
        $this->assertEquals(new TerritoryKh(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('km_KH', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('០១២៣៤៥៦៧៨៩', $locale->digits('0123456789'));
        $this->assertSame('lang="km"', $locale->htmlAttributes());
        $this->assertSame('km', $locale->languageTag());
        $this->assertSame('-១២៣', $locale->number(-123));
        $this->assertSame('១២.៣៤៥.៦៧៨,០៩', $locale->number(12345678.09));
        $this->assertSame('១.២៣៤,៥៦%', $locale->percent(12.3456));
    }
}
