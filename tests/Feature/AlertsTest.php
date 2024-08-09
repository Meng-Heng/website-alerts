<?php

use ParsedownAlerts\Alerts;
use PHPUnit\Framework\TestCase;

class AlertsTest extends TestCase
{
    /** @test */
    public function testAlerts()
    {
        $alerts = new Alerts();
        $oneAlert = <<<EOD
>[!IMPORTANT] This is the first Important Alert line.
>Continues here.
EOD;

        $expectedResult = <<<EOT
<blockquote class="markdown-alert markdown-alert-important">
<p class="markdown-alert-title"><svg class="octicon octicon-report mr-2" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="M0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v9.5A1.75 1.75 0 0 1 14.25 13H8.06l-2.573 2.573A1.458 1.458 0 0 1 3 14.543V13H1.75A1.75 1.75 0 0 1 0 11.25Zm1.75-.25a.25.25 0 0 0-.25.25v9.5c0 .138.112.25.25.25h2a.75.75 0 0 1 .75.75v2.19l2.72-2.72a.749.749 0 0 1 .53-.22h6.5a.25.25 0 0 0 .25-.25v-9.5a.25.25 0 0 0-.25-.25Zm7 2.25v2.5a.75.75 0 0 1-1.5 0v-2.5a.75.75 0 0 1 1.5 0ZM9 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path></svg>Important</p>
<p>This is the first Important Alert line.</p>
<p>Continues here.</p>
</div>
EOT;
        // echo "Actual markdown: " . $oneAlert;
        echo "Actual markdown: " . $alerts->text($oneAlert);
        // echo "\n Expected: " . $expectedResult;
        // $this->assertEquals($expectedResult, $alerts->text($oneAlert));
    }
}
