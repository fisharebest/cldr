<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleBnBd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleBnBdTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleBnBd;

		$this->assertEquals(new LanguageBn, $locale->language());
		$this->assertEquals(new ScriptBeng, $locale->script());
		$this->assertEquals(new TerritoryBd, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('bn_BD', $locale->code());
		$this->assertSame('bn', $locale->languageTag());
		$this->assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
		$this->assertSame('১,২৩,৪৫,৬৭৮.০৯', $locale->number(12345678.09));
		$this->assertSame('lang="bn"', $locale->htmlAttributes());
		$this->assertSame('-১২৩', $locale->number(-123));
	}
}
