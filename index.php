<?php
include("./data.php");
getNewData();
$new = getNew();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-shop</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <header>

        <nav class="top-nav">

            <a class="top-a" href="#">Men's</a>
            <a class="top-a" href="#">Women's</a>
            <a class="top-a" href="#">Search</a>

            <div class="right-a">
                <a class="top-a" href="#">English</a>
                <a class="top-a" href="#">My account</a>
                <a class="top-a" href="#">Bag(0)</a>
            </div>
        </nav>
    </header>
    <header>

        <nav class="bottom-nav">
            <a href="accessories.php">Accessories</a>
            <a  href="footwear.php">Footwear</a>
            <a  href="clothing.php">Clothing</a>
            <a style="color:#080808" href="index.php">New arrivals</a>

        </nav>
    </header>
    <div class="grid-container">
        <?php foreach ($new as $new) : ?>
            <div class="grid-item">
                <img src="http://hdtestapi-env.eba-kx2gjzny.eu-central-1.elasticbeanstalk.com<?php echo $new['image']; ?>" alt="missing_new_arrivals_img">
                <div class="grid-brand"><?php echo $new['brand'] ?></div>
                <div class="grid-name"><?php echo $new['name'] ?></div>
            </div>


        <?php endforeach;; ?>
    </div>


</body>

</html>