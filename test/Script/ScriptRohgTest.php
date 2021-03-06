<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptRohg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptRohgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptRohg();

        $this->assertSame('Rohg', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('167', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Hanifi_Rohingya', $script->unicodeName());
    }
}
