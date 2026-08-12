<?php 
    $pageTitle = "Dynamic PHP Page";
    $currentTime = date("H:i:s");
?>

<html>
    <head>
        <title><?=$pageTitle?></title>
    </head>
    <body>
        <h1>Welcome</h1>
        <p>The current server time is: <?=$currentTime?></p>
    </body>
</html>