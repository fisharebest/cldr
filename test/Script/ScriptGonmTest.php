<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptGonmTest class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptGonmTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptGonm;

		$this->assertSame('Gonm', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('313', $script->number());
		$this->assertSame(array(), $script->numerals());
        $this->assertSame('Masaram_Gondi', $script->unicodeName());
	}
}
