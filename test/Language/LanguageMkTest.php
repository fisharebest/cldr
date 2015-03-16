<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageMk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageMkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageMk;

		$this->assertEquals(new ScriptCyrl, $language->defaultScript());
		$this->assertEquals(new PluralRule15, $language->pluralRule());
		$this->assertSame('mk', $language->code());
	}
}
