<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptCprt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptCprtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$script = new ScriptCprt;

		$this->assertSame('Cprt', $script->code());
		$this->assertSame('403', $script->number());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('Cypriot', $script->unicodeName());
	}
}