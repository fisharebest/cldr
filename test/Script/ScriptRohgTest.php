<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptRohg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptRohgTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptRohg;

		$this->assertSame('Rohg', $script->code());
		$this->assertSame('rtl', $script->direction());
		$this->assertSame('167', $script->number());
		$this->assertSame(array(), $script->numerals());
        $this->assertSame('Hanifi_Rohingya', $script->unicodeName());
	}
}
