<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptCham class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptChamTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptCham;

		$this->assertSame('Cham', $script->code());
		$this->assertSame('358', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Cham', $script->unicodeName());
	}
}