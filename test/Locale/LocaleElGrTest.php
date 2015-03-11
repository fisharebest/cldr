<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleElGr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleElGrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleElGr;

		$this->assertEquals(new LanguageEl, $locale->language());
		$this->assertEquals(new ScriptGrek, $locale->script());
		$this->assertEquals(new TerritoryGr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('el_GR', $locale->code());
		$this->assertSame('el', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('lang="el"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}