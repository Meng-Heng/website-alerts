<?php
namespace ParsedownAlerts\MarkTest;

use Orchestra\Testbench\TestCase;
use ParsedownAlerts\MarkPar;

class MarkTest extends TestCase
{
    public function test_mark_par() {
        $i = new MarkPar();
        $expected = `<p>MengHeng</p>`;
        $this->assertSame($expected, $i->workingParsedown("MengHeng"));
    }
}
?>