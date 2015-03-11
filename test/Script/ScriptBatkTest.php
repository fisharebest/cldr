<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptBatk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptBatkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptBatk;

		$this->assertSame('Batk', $script->code());
		$this->assertSame('365', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Batak', $script->unicodeName());
	}
}