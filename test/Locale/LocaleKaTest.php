<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleKa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleKaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleKa;

		$this->assertEquals(new LanguageKa, $locale->language());
		$this->assertEquals(new ScriptGeor, $locale->script());
		$this->assertEquals(new TerritoryGe, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ქართული', $locale->endonym());
		$this->assertSame('ka_GE', $locale->code());
		$this->assertSame('ka', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('lang="ka"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}