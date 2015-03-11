<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleDeBe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleDeBeTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleDeBe;

		$this->assertEquals(new LanguageDe, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryBe, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('german2_ci', $locale->collation());
		$this->assertSame('de_BE', $locale->code());
		$this->assertSame('de-BE', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('lang="de-BE"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}