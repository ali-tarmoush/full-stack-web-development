<?php
/*Note:
Please open the design in a new tab
*/
include 'Connect-to-MySQL.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Manipulation PHP Test</title>
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
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
        
      <div class="card">
        <form action="insert.php" method="post">
            <label for="inputName" class="sr-only">Enter Name</label>
            <input type="text" class="form-input" id="inputName" name="Name_Product" placeholder="Name" required="required">
            <br>
            <br>
            <input list="Type_Product" class="form-input" name="Type_Product" placeholder="Type Product">
            <datalist id="Type_Product">
                <option value="Mobile">
                <option value="Laptop">
                <option value="Desktop">
                <option value="Motherboard">
                <option value="Router">
                <option value="Keyboard">
            </datalist>
            <br>
            <br>
            <label for="Price_Product" class="sr-only">Enter Price</label>
            <input type="text" class="form-input" id="Price_Product" name="Price_Product" placeholder="Price" required="required">
            <br>
            <br>
            <label for="Description_Product" class="sr-only">Enter Description Product</label>
            <textarea id="Description_Product" class="form-input" name="Description_Product" placeholder="Description..." required="required"></textarea>
            <br>
            <br>
            <label for="Quantity_Product" class="sr-only">Enter Price</label>
            <input type="number" class="form-input" id="Quantity_Product" name="Quantity_Product" placeholder="Quantity" required="required" min=0>
            <br>
            <br>
            <label for="Created_at_Product" class="sr-only">Created at Product</label>
            <input type="date" class="form-input" id="Created_at_Product" name="Created_at_Product" placeholder="Created at Product" required="required">
            <br>
            <br>
            <input type="submit" class="submit-input " name="submit" value="Submit">
        </form>
        </div>
<div class="card-2">
  
        <?php
        $myQuery="SELECT * FROM Store;";
        $result = $conn->query($myQuery);
while($row1 = $result->fetch_assoc()){
  $row = $row1;
}
        ?>
         
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
                <tr>
                    <?php foreach ($row as $key => $value) : ?>
                        <td>
                            <?php echo "$value"; ?>
                        </td>
                    <?php endforeach ?>
                </tr>
            </table>
</div>
        
      </div>
    </main>
    <footer>

    </footer>
</body>

</html>