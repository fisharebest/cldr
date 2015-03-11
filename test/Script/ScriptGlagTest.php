<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptGlag class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptGlagTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptGlag;

		$this->assertSame('Glag', $script->code());
		$this->assertSame('225', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Glagolitic', $script->unicodeName());
	}
}