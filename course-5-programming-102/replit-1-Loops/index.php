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
    // Switch Function
    function switchFunction(&$one_1, &$two_1, &$three_1, &$four_1, &$five_1, &$six_1)
    {
        switch (rand(1, 6)) {
            case '1':
                $one_1++;
                break;
            case '2':
                $two_1++;
                break;
            case '3':
                $three_1++;
                break;
            case '4':
                $four_1++;
                break;
            case '5':
                $five_1++;
                break;
            case '6':
                $six_1++;
                break;
        }
    }
    // Output Function
    function output($one_1, $two_1, $three_1, $four_1, $five_1, $six_1)
    {
        echo ("1 occurred $one_1" . "<br>");
        echo ("2 occurred $two_1" . "<br>");
        echo ("3 occurred $three_1" . "<br>");
        echo ("4 occurred $four_1" . "<br>");
        echo ("5 occurred $five_1" . "<br>");
        echo ("6 occurred $six_1" . "<br>");
    }
    // Variable on the basis of which the dice are rolled
    $x = 5;
    /*
    The bowls that will save the values of repeating the number 
    of the dice in addition to the loop counter and the loop counter, 
    all of which contain a value of 0
    */
    $i = $one = $two = $three = $four = $five = $six = 0;
    // While loop
    while ($i < $x) {
        switchFunction($one, $two, $three, $four, $five, $six);
        $i++;
    }
    echo ("While loop output" . "<br>");
    // The output method is called for the output of the While loop.
    output($one, $two, $three, $four, $five, $six);
    // For loop. 
    $one = $two = $three = $four = $five = $six = 0;
    for ($j = 0; $j < $x; $j++) {
        switchFunction($one, $two, $three, $four, $five, $six);
    }
    echo ("For loop output" . "<br>");
    // The output method is called for the output of the For loop.
    output($one, $two, $three, $four, $five, $six);
    ?>

</body>

</html>