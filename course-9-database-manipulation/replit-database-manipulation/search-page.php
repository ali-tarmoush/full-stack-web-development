<?php include "Connect-to-MySQL.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/main.css">
    <title><?php echo $_GET["search"]; ?></title><link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="first-ten.php">First Ten</a>
                    </li>
                </ul>
                <form class="example" action="search-page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>
    </header>
    <main>
      <div class="master">
        
      <div class="card-3">
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Created at</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM Store;");
        while ($row = $result->fetch_assoc()) :
        ?>
            <?php foreach ($row as $key => $value) : ?>
                <?php if ($value == $_GET["search"]) : ?>
                    <tr>
                        <?php foreach ($row as $key => $value) : ?>
                            <td>
                                <?php echo "$value"; ?>
                            </td>
                        <?php endforeach ?>
                    </tr>
                <?php endif ?>
            <?php endforeach ?>
        <?php endwhile ?>
    </table>

      </div>
      </div>
    </main>

    
</body>

</html>