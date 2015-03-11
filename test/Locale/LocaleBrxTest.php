<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleBrx class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleBrxTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleBrx;

		$this->assertEquals(new LanguageBrx, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('बड़ो', $locale->endonym());
		$this->assertSame('brx_IN', $locale->code());
		$this->assertSame('brx', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('1,23,45,678.09', $locale->number(12345678.09));
		$this->assertSame('lang="brx"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}