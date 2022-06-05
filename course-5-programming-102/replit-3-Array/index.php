<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>

<body>
    <?php
    $country = array("Syrian", "Lebanon", "Palestine", "Jordan", "Iraq", "Egypt", "Libya", "Morocco");
    $associativeArray = array();
    foreach ($country as $item) {
        $associativeArray[$item] = rand(1000000, 3000000);
    }

    echo "The countries with a population less than 2 millions. <br>";
    foreach ($associativeArray as $key => $value) {
        if ($value < 2000000)
            echo "Key=" . $key . ", Value=" . $value . "<br>";
    }
    echo "The countries with a population more equal 2 millions <br>";
    foreach ($associativeArray as $key => $value) {
        if ($value >= 2000000)
            echo "Key=" . $key . ", Value=" . $value . "<br>";
    }
    ?>
</body>

</html>