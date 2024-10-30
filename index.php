<?php

require('vendor/autoload.php');

use ParsedownAlerts\WebsiteAlerts;

$alerts = new WebsiteAlerts();

$markdownContent = file_get_contents('page.md');
$content = $alerts->text($markdownContent);

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/custom_alerts_styles.css">
        <title>Alerts for your website</title>
    </head>
    <body>
        <p><?php echo $content ?></p>
    </body>
</html>
