<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptEthi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptEthiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptEthi;

		$this->assertSame('Ethi', $script->code());
		$this->assertSame('430', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Ethiopic', $script->unicodeName());
	}
}