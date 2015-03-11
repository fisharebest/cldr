<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptLydi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptLydiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptLydi;

		$this->assertSame('Lydi', $script->code());
		$this->assertSame('116', $script->number());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('Lydian', $script->unicodeName());
	}
}