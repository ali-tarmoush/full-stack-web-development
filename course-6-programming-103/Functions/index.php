<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>

<body>
    <?php
    function random($arr = [])
    {
        $a = [];
        foreach ($arr as $item)
            $a[$item] = rand(0, 100);
        return $a;
    }
    function numberSuccessfulCmpanies($a = [], $successRate = 0)
    {
        $counter = 0;
        foreach ($a as $k => $v) {
            if ($v < $successRate)
                $counter++;
        }
        return $counter;
    }
    function delete(&$a = [], $successRate = 0)
    {
        foreach ($a as $k => $v) {
            if ($v > $successRate) {
                unset($a[$k]);
            }
        }
    }
    function createNewAraay($associativeArray = [])
    {
        $axx = [];
        $i = 0;
        foreach ($associativeArray as $key => $v) {
            $axx[$i] = $key;
            $i++;
        }
        return $axx;
    }
    function minimum($arr = [])
    {
        $minValue = 51;
        foreach ($arr as $key => $value) {
            if ($minValue > $value) {
                $minValue = $value;
            }
        }
        foreach ($arr as $key => $value) {
            if ($minValue != $value) {
                unset($arr[$key]);
            }
        }
        return createNewAraay($arr);
    }
    function successfulCmpanies($companyNames = [], $successRate = 0)
    {
        $associativeArray = random($companyNames);
        $nsc = numberSuccessfulCmpanies($associativeArray, $successRate);
        if ($nsc > 0) {
            delete($associativeArray, $successRate);
            return createNewAraay($associativeArray);
        } else {
            return minimum($associativeArray);
        }
    }
    $companies = ["Company01", "Company02", "Company03", "Company04", "Company05", "Company06", "Company07", "Company08", "Company09", "Company10", "Company11", "Company12", "Company13", "Company14", "Company15", "Company16", "Company17", "Company18", "Company19", "Company20"];
    $startsSuccessRate = 50;
    while (count($companies) != 1) {
        $companies = successfulCmpanies($companies, $startsSuccessRate);
        $startsSuccessRate = $startsSuccessRate / 2;
    }
    echo "Congratulations!! $companies[0]";
    ?>
</body>

</html>