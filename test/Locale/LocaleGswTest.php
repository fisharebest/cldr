<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleGsw class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleGswTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleGsw;

		$this->assertEquals(new LanguageGsw, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCh, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('Schwiizertüütsch', $locale->endonym());
		$this->assertSame('gsw_CH', $locale->code());
		$this->assertSame('gsw', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12’345’678.09', $locale->number(12345678.09));
		$this->assertSame('lang="gsw"', $locale->htmlAttributes());
		$this->assertSame('−123', $locale->number(-123));
	}
}
