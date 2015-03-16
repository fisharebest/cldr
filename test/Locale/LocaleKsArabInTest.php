<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleKsArabIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleKsArabInTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleKsArabIn;

		$this->assertEquals(new LanguageKs, $locale->language());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ks_IN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
		$this->assertSame('lang="ks" dir="rtl"', $locale->htmlAttributes());
		$this->assertSame('ks', $locale->languageTag());
		$this->assertSame('‎-‎١٢٣', $locale->number(-123));
		$this->assertSame('١٬٢٣٬٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
	}
}
