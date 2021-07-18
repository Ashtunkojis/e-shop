<?php

// functions take data from api and write it to json
function getFootwearData()
{
    $footwear_api = fopen("http://hdtestapi-env.eba-kx2gjzny.eu-central-1.elasticbeanstalk.com/products/category/1003", "r");
    $footwear_data = stream_get_contents($footwear_api);
    fclose($footwear_api);
    file_put_contents(__DIR__ . '/db/footwear.json', $footwear_data);
}

function getClothingData()
{
    $clothing_api = fopen("http://hdtestapi-env.eba-kx2gjzny.eu-central-1.elasticbeanstalk.com/products/category/1002", "r");
    $clothing_data = stream_get_contents($clothing_api);
    fclose($clothing_api);
    file_put_contents(__DIR__ . '/db/clothing.json', $clothing_data);
}
function getAccessoriesData()
{
    $accessories_api = fopen("http://hdtestapi-env.eba-kx2gjzny.eu-central-1.elasticbeanstalk.com/products/category/1004", "r");
    $accessories_data = stream_get_contents($accessories_api);
    fclose($accessories_api);
    file_put_contents(__DIR__ . '/db/accessories.json', $accessories_data);
}
// new means new arrivals
function getNewData()
{

    $new_api = fopen("http://hdtestapi-env.eba-kx2gjzny.eu-central-1.elasticbeanstalk.com/products/category/1001", "r");
    $new_data = stream_get_contents($new_api);
    fclose($new_api);
    file_put_contents(__DIR__ . '/db/new.json', $new_data);
}

// functions take data from json and convert to array, to get used in content
function getFootwear()
{
    return json_decode(file_get_contents(__DIR__ . '/db/footwear.json'), true);
}



function getNew()
{
    return json_decode(file_get_contents(__DIR__ . '/db/new.json'), true);
}



function getClothing()
{
    return json_decode(file_get_contents(__DIR__ . '/db/clothing.json'), true);
}


function getAccessories()
{
    return json_decode(file_get_contents(__DIR__ . '/db/accessories.json'), true);
}
