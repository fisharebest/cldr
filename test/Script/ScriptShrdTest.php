<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the ScriptShrd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class ScriptShrdTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$script = new ScriptShrd;

		$this->assertSame('Shrd', $script->code());
		$this->assertSame('ltr', $script->direction());
		$this->assertSame('319', $script->number());
		$this->assertSame(array('𑇐', '𑇑', '𑇒', '𑇓', '𑇔', '𑇕', '𑇖', '𑇗', '𑇘', '𑇙'), $script->numerals());
		$this->assertSame('Sharada', $script->unicodeName());
	}
}
