<?php
// Start the session
session_start();
include 'Connect-to-MySQL.php';
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    // escaping functions
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameOk = $typeOk = false;
    $name = $type = $price = $description = $quantity = $created_at = "";
    $nameErr = $typeErr = "";
    if (empty($_POST['Name_Product'])) {
        $nameErr = "Name is required";
        $nameOk = false;
    } else {
        // Sanitization Functions
        $cleanNameErr = $conn->real_escape_string($_POST['Name_Product']);
        $nameErr = test_input($cleanNameErr);
        $myquery = "SELECT * FROM Store WHERE Name_Product='$nameErr'";
        $result = $conn->query($myquery);
        if ($result->num_rows > 1) {
            $nameErr = "Name already used";
            $nameOk = false;
        } else {
            // Sanitization Functions
            $cleanName = $conn->real_escape_string($_POST['Name_Product']);
            $name = test_input($cleanName);
            $nameOk = true;
        }
    }
    if (empty($_POST["Type_Product"])) {
        $typeErr = "Type_Product is required";
        $typeOk = false;
    } else {
        // Sanitization Functions
        $cleanType = $conn->real_escape_string($_POST["Type_Product"]);
        $type = test_input($cleanType);
        $typeOk = true;
    }
    if (!empty($_POST["Price_Product"])) {
        // Sanitization Functions
        $cleanPrice = $conn->real_escape_string($_POST["Price_Product"]);
        $price = test_input($cleanPrice);
    }
    if (!empty($_POST["Description_Product"])) {
        // Sanitization Functions
        $cleanDescription = $conn->real_escape_string($_POST["Description_Product"]);
        $description = test_input($cleanDescription);
    }
    if (!empty($_POST["Quantity_Product"])) {
        // Sanitization Functions
        $cleanQuantity = $conn->real_escape_string($_POST["Quantity_Product"]);
        $quantity = test_input($cleanQuantity);
    }
    if (!empty($_POST["Created_at_Product"])) {
        // Sanitization Functions
        $cleanCreated_at = $conn->real_escape_string($_POST["Created_at_Product"]);
        $created_at = test_input($cleanCreated_at);
    }
    if ($nameOk == true &&  $typeOk == true) {
        $myQuery = "INSERT INTO Store
(Name_Product,Type_Product,Price_Product,
          Description_Product,Quantity_Product ,Created_at_Product)
          VALUES ('$name', '$type','$price','$description','$quantity','$created_at');";
        $conn->query($myQuery);
    }
}
header('Location: index.php?');
exit;
