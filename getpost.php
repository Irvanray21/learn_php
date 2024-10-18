<?php
//$_GET & $_POST is a super global variable
//bring many data inside the apps

//$_GET passing data from url
// $_GET["name"] = "Testerlol";
// $_GET["address"] = "Bandung";
// var_dump($_GET);

$arr = [
    [
        "name" => "Mono",
        "city" => "Bavaria",
        "weapon" => "Fist"
    ],
    [
        "name" => "Tetra",
        "city" => "Brittania",
        "weapon" => "Staff"
    ]
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
    <ul>
        <?php foreach ($arr as $indiv): ?>
            <li>
                <a href="./get.php?name=<?=
                                        $indiv['name'] ?>&city=<?=
                                        $indiv['city'] ?>&weapon=<?=
                                        $indiv['weapon']; ?>">
                    <?= $indiv['name']; ?>
                </a>

            </li>
        <?php endforeach; ?>
    </ul>

    <hr/>

    <!-- <form action="post.php" method="post"> -->
    <form method="post">
        <input type="text" name="txt_username"
        placeholder="username"/>

        <input type="password" name="txt_password"
        placeholder="password"/>

        <button type="submit">Submit</button>
    </form>

    <?php if(isset($_POST['txt_username'])):?>
    <h3>Guten Tag, <?php echo $_POST['txt_username'] ?></h3>
    <?php endif; ?>
</body>

</html>