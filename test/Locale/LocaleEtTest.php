<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleEt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleEtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleEt;

		$this->assertEquals(new LanguageEt, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryEe, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('estonian_ci', $locale->collation());
		$this->assertSame('eesti', $locale->endonym());
		$this->assertSame('et_EE', $locale->code());
		$this->assertSame('et', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12345 678,09', $locale->number(12345678.09));
		$this->assertSame('lang="et"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}