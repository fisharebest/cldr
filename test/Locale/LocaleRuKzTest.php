<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleRuKz class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleRuKzTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleRuKz;

		$this->assertEquals(new LanguageRu, $locale->language());
		$this->assertEquals(new ScriptCyrl, $locale->script());
		$this->assertEquals(new TerritoryKz, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ru_KZ', $locale->code());
		$this->assertSame('ru-KZ', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('lang="ru-KZ"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}