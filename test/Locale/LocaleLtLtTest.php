<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleLtLt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleLtLtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleLtLt;

		$this->assertEquals(new LanguageLt, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryLt, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('lithuanian_ci', $locale->collation());
		$this->assertSame('lt_LT', $locale->code());
		$this->assertSame('lt', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('lang="lt"', $locale->htmlAttributes());
		$this->assertSame('−123', $locale->number(-123));
	}
}