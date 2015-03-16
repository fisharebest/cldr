<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleBsLatn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleBsLatnTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleBsLatn;

		$this->assertEquals(new LanguageBs, $locale->language());
		$this->assertEquals(new PluralRule7, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryBa, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('bs_BA', $locale->code());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="bs"', $locale->htmlAttributes());
		$this->assertSame('bs', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
