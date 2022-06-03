<?php
// Start the session
session_start();

function random()
{
    switch (rand(1, 4)) {
        case '1':
            return "Small";
            break;
        case '2':
            return "Medium";
            break;
        case '3':
            return "Large";
            break;
        default:
            return "XLarge";
    }
}
$products = [];
$rangeStart = 1;
$rangeEnd = 60;
for ($i = $rangeStart; $i <= $rangeEnd; $i++) {
    $j = 480 + $i;
    $products[$i] = [
        "id" => 4000 + $i,
        "size" => random(),
        "name" => "Name" . "$i",
        "image" => "https://placeimg.com/640/$j/any/grayscale",
        "about" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
    ];
}
$cookie_name = "sizeOfProducts";
$cookie_value = count($products);
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day