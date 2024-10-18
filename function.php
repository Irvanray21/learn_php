<?php
    function greeting($name, $section){
        return "Welcome to " . $section . ", " . $name;
    }

    function counts($nom, $sum){
        // return $nom * $sum;
        $num = $nom * $sum;
        $string_return = "Rp" . number_format($num, 2, ',','.');
        return $string_return;
    }

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Function</title>

    </head>
    <body>
        <h1><?php echo greeting('user', 'function section'); ?></h1>

        <h3><?php echo counts(5000, 5); ?></h3>
    </body>
</html>