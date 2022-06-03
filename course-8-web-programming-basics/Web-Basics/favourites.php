<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Favourites</title>
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
                        <a class="nav-link active" href="./favourites.php">Favourites</a>
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
                    <?php
                    if (count($_SESSION) == 0) {
                        echo "not favourites";
                    } else {
                        echo "Your favourites.<br/>";
                        // print_r( );
                        foreach ($_SESSION as $k => $v) {
                            echo "$k<br/>";
                        }
                    }
                    ?>
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