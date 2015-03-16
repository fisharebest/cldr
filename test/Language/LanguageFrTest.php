<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageFr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageFrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageFr;

		$this->assertEquals(new ScriptLatn, $language->defaultScript());
		$this->assertEquals(new PluralRule2, $language->pluralRule());
		$this->assertSame('fr', $language->code());
	}
}
