<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptArmn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptArmnTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptArmn;

		$this->assertSame('Armn', $script->code());
		$this->assertSame('230', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Armenian', $script->unicodeName());
	}
}