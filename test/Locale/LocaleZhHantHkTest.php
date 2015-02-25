<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleZhHantHk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleZhHantHkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleZhHantHk;

		$this->assertEquals(new LanguageZh, $locale->language());
		$this->assertEquals(new ScriptHant, $locale->script());
		$this->assertEquals(new TerritoryHk, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12345,678.09', $locale->number(12345678.09));
		$this->assertSame('lang="zh-Hant-HK"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
