<?php

namespace ParsedownAlerts;

use Parsedown;

class MarkPar {
    public function workingParsedown($a) {
        $Parsedown = new Parsedown();
        echo $Parsedown::instance()->text($a);
    }
}

?>