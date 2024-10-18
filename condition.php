<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>

<body>

    <!-- If Condition -->

    <h4>Kondisi If</h4>

    <?php

    $umur_a = 20;

    if ($umur_a <= 20) {
        echo "Umur Kurang dari 30";
    } else {
        echo "Umur Lebih dari 30";
    }

    ?>

    <hr />

    <!-- End If Condition -->



    <!-- If Else If Else Condition -->

    <h4>Kondisi If Bersarang</h4>

    <?php

    $umur_b = 10;

    if ($umur_b == 20) {
        echo "Umur sama dengan 20";
    } else if ($umur_b <= 20) {
        echo "Umur Kurang dari 20 ";
    } else if ($umur_b <= 30) {
        echo "Umur Kurang dari 30 ";
    } else {
        echo "Umur Lebih dari 30";
    }

    ?>

    <hr />

    <!-- End If Else If Else Condition -->

    <!-- Ternary Condition -->

    <h4>Kondisi Ternary</h4>

    <!-- pada PHP true diwakili dengan angka 1 dan false 0 -->
    <?php

    $umur_c = 20;

    echo ($umur_c < 30 ? true : False);

    echo ($umur_c < 30 ? "Umur Kurang dari 30" : "Umur Lebih dari 30");

    ?>

    <hr />

    <!-- End Ternary Condition -->

    <!-- Switch Condition -->

    <h4>Kondisi Switch</h4>

    <?php

    $umur_d = 20;

    // pada switch case bisa mengandung beberapa case 
    /*
        contohnya

        switch ($umur_d) {
        case 10:
        case 11:
        case 15:
            echo "umur 15";
            break;

            case 20:
            echo "umur 20";
            break;

        default:
            echo "umur tidak terdefinisi";
    }
    
    */

    switch ($umur_d) {
        case 15:
            echo "umur 15";
            break;

        case 20:
            echo "umur 20";
            break;

        default:
            echo "umur tidak terdefinisi";
    }

    ?>

    <hr />

    <!-- End Switch Condition --

</body>

</html>