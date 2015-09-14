<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSk;

		$this->assertEquals(new LanguageSk, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritorySk, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('slovak_ci', $locale->collation());
		$this->assertSame('slovenčina', $locale->endonym());
		$this->assertSame('sk_SK', $locale->code());
		$this->assertSame('sk', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('lang="sk"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
