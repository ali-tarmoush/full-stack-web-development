
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adding a new product</title>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="new-product.php">New Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favourites.php">Favourites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-searched.php">User Searched </a>
                    </li>
                </ul>
                <form class="form-search" action="search-page.php">
                    <input class="input-search" type="search" name="search" placeholder="Search..">
                    <button class="btn-search" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <div class="page">
        <div class="card">
            <form id="form_insert" action="./new.php" method="post">
                <label for="name" class="sr-only">Enter Name</label>
                <input class="input-insert" type="text" id="name" name="name" placeholder="Name" />
                <p id="error_name" class="valid-feedback"></p>

                <input class="input-insert" list="size" name="size" placeholder="Size" />
                <datalist id="size">
                    <option value="Small"></option>
                    <option value="Medium"></option>
                    <option value="Large"></option>
                    <option value="XLarge"></option>
                </datalist>
                <p id="error_size" class="valid-feedback"></p>
                <label for="URL_image" class="sr-only">URL your image</label>
                <input class="input-insert" type="text" class="" id="URL_image" name="URL_image" placeholder="URL your image" />
                <p id="error_URL_image" class="valid-feedback"></p>
                <label for="Description" class="sr-only"></label>
                <textarea id="Description" name="Description" placeholder="Description..."></textarea>
                <p id="error_Description" class="valid-feedback"></p>
                <input class="input-insert" type="checkbox" id="Favourite" name="Favourite" value="Favourite">
                <label for="Favourite"> Favourite</label>
                <br />
                <br />
                <button class="btn-insert" type="submit" name="submit" value="Submit">Submit</button>
            </form>
        </div>
    </div>
    <footer>
        Developed By <a href="https://alitarmoush.000webhostapp.com/">Ali Ahmed Tarmoush</a>|<a href="https://github.com/ali-tarmoush">GitHub</a>
    </footer>
    <script src="assets/js/script.js"></script>
</body>

</html>