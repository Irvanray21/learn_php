<?php
$arr = [
    ["Monday", "Selasa", "Rabu"],
    ["January", "February", "March"],
    ["2020", "2021", "2022"],
];

// foreach ($arr as $data){
//     var_dump($data);
// }

$dataPerson = [
    [
        "name" => "Mono",
        "city" => "Bavaria",
        "suit" => "Red",
        "fav" => [
            "Tacos",
            "Chocolate",
            "Strawberry"
        ]
    ],
    [
        "name" => "Tetra",
        "city" => "Gallia",
        "suit" => "Blue",
        "fav" => [
            "Milk",
            "Pasta",
            "Apple"
        ]
    ],
    [
        "name" => "Aenea",
        "city" => "Brittania",
        "suit" => "Black",
        "fav" => [
            "Marshmnallow",
            "Juice"
        ]
    ],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php foreach ($arr as $data): ?>
        <ul style="margin-bottom: 24px;">
            <li>Day: <?= $data[0] ?></li>
            <li>Month: <?= $data[1] ?></li>
            <li>Yera: <?= $data[2] ?></li>
        </ul>
    <?php endforeach; ?> -->

    <!-- <?php //echo $dataPerson[0]['name']; 
            ?> -->

    <?php foreach ($dataPerson as $data): ?>
        <ul style="margin-bottom: 24px;">
            <li>Name: <?php echo $data['name']; ?></li>
            <li>City: <?php echo $data['city']; ?></li>
            <li>Colour: <?php echo $data['suit']; ?></li>
            <li> Fav Food:
                <ol>
                    <?php foreach ($data['fav'] as $food): ?>
                        <li><?php echo $food; ?></li>
                    <?php endforeach; ?>
                </ol>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>