<?php
setcookie("third", $_COOKIE['second'], time() + (86400 * 30), "/");
setcookie("second", $_COOKIE['first'], time() + (86400 * 30), "/");
setcookie("first", $_GET["search"], time() + (86400 * 30), "/");
include "./database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $_GET["search"]; ?></title>
    <link rel="stylesheet" href="assets/sass/style.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet" />
</head>

<body><header>
        <nav class="navbar">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">Home</a>
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
            <div class="card-2">

                <p>The server has processed your input and returned this answer.</p>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>SIZE</th>
                        <th>NAME</th>
                        <th>IMAGE</th>
                        <th>ABOUT</th>
                    </tr>

                    <?php for ($i = 1; $i <= count($products); $i++) : ?>
                        <?php foreach ($products[$i] as $key => $value) : ?>
                            <?php if ($value == $_GET["search"]) : ?>
                                <tr>
                                    <?php foreach ($products[$i] as $key => $value) : ?>
                                        <td>
                                            <?php
                                            if ($key == "image") {
                                                echo "<img src='$value' alt=''>";
                                            } else {
                                                echo "$value";
                                            }
                                            ?>
                                        </td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>
                    <?php endfor ?>
                </table>
            </div>
        </div>
    </main>
    <footer>
        Developed By <a href="https://alitarmoush.000webhostapp.com/">Ali Ahmed Tarmoush</a>|<a href="https://github.com/ali-tarmoush">GitHub</a>
    </footer>
</body>

</html>