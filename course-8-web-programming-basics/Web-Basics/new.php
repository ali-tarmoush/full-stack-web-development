<?php
include "./database.php";
function test_input($data)
{
    ///The trim() function removes whitespace and other predefined characters from both sides of a string.
    $data = trim($data);
    ///The stripslashes() function removes backslashes added by the addslashes() function.
    $data = stripslashes($data);
    ///The htmlspecialchars() function converts some predefined characters to HTML entities.
    $data = htmlspecialchars($data);
    return $data;
}
// define variables and set to empty values
$nameError = $sizeError = $URLError = "";
$name = $size = $URL = $about = $favourite = "";
$a = $b = $c = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
        $a = false;
    } else {
        $name = test_input($_POST["name"]);
        $a = true;
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameError = "Only letters and white space allowed";
            $name = "";
            $a = false;
        }
    }
    // 
    if (empty($_POST["size"])) {
        $sizeError = "Size is required";
        $b = false;
    } else {
        $size = test_input($_POST["size"]);
        $b = true;
    }
    // 
    if (empty($_POST["website"])) {
        $URL = "";
        $c = true;
    } else {
        $URL = test_input($_POST["website"]);
        $c = true;
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $URL)) {
            $URLError = "Invalid URL";
            $URL = "";
            $c = false;
        }
    }
    if (empty($_POST["about"])) {
        $about = "";
    } else {
        $about = test_input($_POST["about"]);
    }
    if (empty($_POST["Favourite"])) {
        $favourite = "";
    } else {
        $favourite = test_input($_POST["Favourite"]);
    }
}

if ($a and $b and $c) {
    $st = "The entry process was successful";
    $newIndex = $_COOKIE['sizeOfProducts'] + 1;
    $products[$newIndex]["id"] = $products[$_COOKIE['sizeOfProducts'] - 1]["id"] + 1;
    $products[$newIndex]["size"] = $size;
    $products[$newIndex]["name"] = $name;
    $products[$newIndex]["image"] = $URL;
    $products[$newIndex]["about"] = $about;
    if ($favourite != "") {
        // $sizeSession = count($_SESSION)+1;
        $_SESSION[$products[$newIndex]["name"]] = $products[$newIndex]["id"];
    }
} else {
    $st = "The entry process was unsuccessful $nameError, $sizeError , $URLError.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New product</title>
    <link rel="stylesheet" href="assets/sass/style.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./new-product.php">New Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./favourites.php">Favourites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user-searched.php">User Searched </a>
                    </li>
                </ul>
                <form class="form-search" action="search-page.php">
                    <input class="input-search" type="search" name="search" placeholder="Search..">
                    <button class="btn-search" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <div class="page">
            <div class="card">
                <p>
                    <?php echo $st;?>
                </p>
            </div>
        </div>
    </main>
    <footer>
        Developed By <a href="https://alitarmoush.000webhostapp.com/">Ali Ahmed Tarmoush</a>|<a href="https://github.com/ali-tarmoush">GitHub</a>
    </footer>
    <script src="assets/js/script.js"></script>
</body>

</html>