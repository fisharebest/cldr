<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptTfng class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptTfngTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptTfng;

		$this->assertSame('Tfng', $script->code());
		$this->assertSame('120', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Tifinagh', $script->unicodeName());
	}
}