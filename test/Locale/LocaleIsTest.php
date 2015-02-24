<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleIs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleIsTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleIs;

		$this->assertEquals(new LanguageIs, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryIs, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('icelandic_ci', $locale->collation());
		$this->assertSame('íslenska', $locale->endonym());
		$this->assertSame('is_IS', $locale->code());
		$this->assertSame('is', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
