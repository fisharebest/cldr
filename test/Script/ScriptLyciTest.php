<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLyci class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptLyciTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLyci();

        $this->assertSame('Lyci', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('202', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Lycian', $script->unicodeName());
    }
}
