<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>

    <!-- Pengulangan for -->
    <strong>Pengulangan PHP For </strong>
    <?php

    for ($i = 0; $i < 5; $i++) {
        echo "<p>Ini Pengulangan ke : " . $i . "</p>";
    }

    ?>

    <!-- End Pengulangan for -->

    <hr />

    <!-- Pengulangan while -->
    <strong>Pengulangan PHP while </strong>
    <?php

    $a = 0;
    while ($a < 5) {
        echo "<p>Ini Pengulangan ke : " . $a . "</p>";
        $a++;
    }

    ?>

    <!-- End Pengulangan while -->

    <hr />

    <!-- Pengulangan Do while -->
    <strong>Pengulangan PHP Do while </strong>
    <?php

    $b = 0;
    do {
        echo "<p>Ini Pengulangan ke : " . $b . "</p>";
        $b++;
    } while ($b < 5);


    ?>

    <!-- End Pengulangan Do while -->

    <hr />

    <!-- Table pengulangan PHP -->

    <h4 class="mb-2">Table pengulangan PHP </h4>

    <table border="1">

        <?php for ($baris = 1; $baris <= 3; $baris++): ?>

            <tr>
                <?php for ($kolom = 1; $kolom <= 5; $kolom++): ?>
                    <td><?= $baris; ?>.<?= $kolom; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>


    </table>

    <!-- End Table pengulangan PHP -->

</body>

</html>