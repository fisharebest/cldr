<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageZgh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageZghTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageZgh();

        $this->assertEquals(new ScriptLatn(), $language->defaultScript());
        $this->assertSame('zgh', $language->code());
    }
}
