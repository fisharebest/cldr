<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleArSo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleArSoTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleArSo;

		$this->assertEquals(new LanguageAr, $locale->language());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritorySo, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ar_SO', $locale->code());
		$this->assertSame('ar-SO', $locale->languageTag());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
		$this->assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
		$this->assertSame('lang="ar-SO" dir="rtl"', $locale->htmlAttributes());
		$this->assertSame('‏-١٢٣', $locale->number(-123));
	}
}