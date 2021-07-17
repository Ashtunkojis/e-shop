<?php
include("./data.php");
getAccessoriesData();

$accessories = getAccessories();
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
    <?php if (count($accessories) == 0): ?>
        <div>Sorry, no accessories found :(</div>
    <?php endif; ?>
    <?php foreach ($accessories as $accessories) : ?>

        <img src="http://hdtestapi-env.eba-kx2gjzny.eu-central-1.elasticbeanstalk.com<?php echo $accessories['image']; ?>" alt="missing_accessories_img">
        <div><?php echo $accessories['brand'] ?></div>
        <div><?php echo $accessories['name'] ?></div>
    <?php endforeach;; ?>

</body>

</html>