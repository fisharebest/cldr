<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTglg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptTglgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTglg();

        $this->assertSame('Tglg', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('370', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Tagalog', $script->unicodeName());
    }
}
