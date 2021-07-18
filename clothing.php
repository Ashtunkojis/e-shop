<?php
include("./data.php");
// functions get data from api and then creates new variable with json data as array
getClothingData();
$clothing = getClothing();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <!-- first nav bar -->
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
    <!-- second nav bar -->
    <header>
        <nav class="bottom-nav">
            <a class="shiny" href="accessories.php">Accessories</a>
            <a class="shiny" href="footwear.php">Footwear</a>
            <a style="color:#080808; font-weight: bold;" href="clothing.php">Clothing<br>
                <span><?php echo count($clothing) ?> PRODUCTS</span></a>
            <a class="shiny" href="index.php">New arrivals</a>
        </nav>
    </header>
    <!-- generating content from array -->
    <div class="grid-container">
        <?php foreach ($clothing as $clothing) : ?>
            <div class="grid-item">
                <?php foreach ($clothing['labels'] as $label) : ?>
                    <div class="<?php echo $label; ?>">
                        <span><?php echo $label; ?></span>
                    </div>
                <?php endforeach;; ?>
                <img src="http://hdtestapi-env.eba-kx2gjzny.eu-central-1.elasticbeanstalk.com<?php echo $clothing['image']; ?>" alt="missing_clothing_img">
                <div class="grid-brand"><?php echo $clothing['brand'] ?></div>
                <div class="grid-name"><?php echo $clothing['name'] ?></div>
            </div>
        <?php endforeach;; ?>
</body>

</html>