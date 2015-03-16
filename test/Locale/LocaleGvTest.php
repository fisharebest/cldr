<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleGv class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleGvTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleGv;

		$this->assertEquals(new LanguageGv, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryIm, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('gv_IM', $locale->code());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Gaelg', $locale->endonym());
		$this->assertSame('lang="gv"', $locale->htmlAttributes());
		$this->assertSame('gv', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
