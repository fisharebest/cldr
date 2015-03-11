<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleCaEsValencia class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleCaEsValenciaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleCaEsValencia;

		$this->assertEquals(new LanguageCa, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryEs, $locale->territory());
		$this->assertEquals(new VariantValencia, $locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ca_ES@valencia', $locale->code());
		$this->assertSame('ca-valencia', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('lang="ca-valencia"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}