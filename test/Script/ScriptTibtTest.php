<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTibt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTibtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTibt;

		$this->assertSame('Tibt', $script->code());
		$this->assertSame('330', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Tibetan', $script->unicodeName());
	}
}