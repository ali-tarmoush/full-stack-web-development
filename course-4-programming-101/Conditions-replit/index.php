<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions PHP Test</title>
</head>

<body>
    <?php
    // 3 variables containing the number of kilowatts for the slices
    $number_KW_for_slide1 = 1;
    $number_KW_for_slide2 = 301;
    $number_KW_for_slide3 = 601;
    // 3 variables that contain the price of each of the slides
    $slide_price1 = 0.5;
    $slide_price2 = 1;
    $slide_price3 = 2;
    // variable that contains the user's current consumption
    $electricityConsumption = 250000;
    /** 
     *Converting from a month to an hour we divide the value of "electricityConsumption" by (30 * 24 =720)
     *But according to "eConverter.net", the value of "electricityConsumption" should be divided by 730
     * Page link "https://www.econverter.net/en/tools/units-converter/time/month/hour/"
     */
    $mth = 730;
    if ($electricityConsumption < $mth) {
        echo "Error, Please check the value electricity Consumption";
    } else {
        $x = $electricityConsumption / $mth;
        $consumptionCost = $group = null;
        if ($x >= $number_KW_for_slide1 && $x < $number_KW_for_slide2) {
            $consumptionCost = $electricityConsumption * $slide_price1;
            $group = "group 1";
        } elseif ($x >= $number_KW_for_slide2 && $x < $number_KW_for_slide3) {
            $consumptionCost = $electricityConsumption * $slide_price2;
            $group = "group 2";
        } elseif ($x >= $number_KW_for_slide3) {
            $consumptionCost = $electricityConsumption * $slide_price3;
            $group = "group 3";
        }
        echo "$group and consumption cost= $consumptionCost $";
    }
    ?>
</body>

</html>