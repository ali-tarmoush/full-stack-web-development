<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>

<body>
    <?php
    $_X = 0;
    if ($_X >= 0 && $_X <= 20) {
        $_FACTORIAL=1;
        for ($_I = $_X; $_I >= 1; $_I--) {
            $_FACTORIAL*=$_I;
        }
        echo("The factorial for $_X is : $_FACTORIAL");
    }
    else{
        echo "Please check the input";
    }
    ?>
</body>

</html>