<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleVi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleViTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleVi;

		$this->assertEquals(new LanguageVi, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryVn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('vietnamese_ci', $locale->collation());
		$this->assertSame('Tiếng Việt', $locale->endonym());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('lang="vi"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
