<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleLkt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleLktTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleLkt;

		$this->assertEquals(new LanguageLkt, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryUs, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('Lakȟólʼiyapi', $locale->endonym());
		$this->assertSame('lkt_US', $locale->code());
		$this->assertSame('lkt', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('lang="lkt"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}