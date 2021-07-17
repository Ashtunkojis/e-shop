<?php
include("./data.php");
getClothingData();

$clothing = getClothing();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

        <nav>
            <a href="#">Men's</a>
            <a href="#">Women's</a>
            <a href="#">Search</a>
            <a href="#">English</a>
            <a href="#">My account</a>
            <a href="#">Bag</a>
        </nav>
    </header>
    <header>

        <nav>
            <a href="index.php">New arrivals</a>
            <a href="clothing.php">Clothing</a>
            <a href="footwear.php">Footwear</a>
            <a href="accessories.php">Accessories</a>
        </nav>
    </header>
    <?php foreach ($clothing as $clothing) : ?>

        <img src="http://hdtestapi-env.eba-kx2gjzny.eu-central-1.elasticbeanstalk.com<?php echo $clothing['image']; ?>" alt="missing_clothing_img">
        <div><?php echo $clothing['brand'] ?></div>
        <div><?php echo $clothing['name'] ?></div>
    <?php endforeach;; ?>
</body>

</html>