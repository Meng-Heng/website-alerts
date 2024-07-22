<?php

use ParsedownAlerts\Alerts;

it('performs alerts', function () {
    $useAlerts = new Alerts(">[!IMPORTANT]");

    expect($useAlerts)->toBe('');
})

?>