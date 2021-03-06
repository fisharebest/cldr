<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGujr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptGuruTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGuru();

        $this->assertSame('Guru', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('310', $script->number());
        $this->assertSame(array('੦', '੧', '੨', '੩', '੪', '੫', '੬', '੭', '੮', '੯'), $script->numerals());
        $this->assertSame('Gurmukhi', $script->unicodeName());
    }
}
