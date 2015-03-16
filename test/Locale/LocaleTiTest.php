<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleTi;

		$this->assertEquals(new LanguageTi, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptEthi, $locale->script());
		$this->assertEquals(new TerritoryEt, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('ትግርኛ', $locale->endonym());
		$this->assertSame('lang="ti"', $locale->htmlAttributes());
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('-123', $locale->number(-123));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
