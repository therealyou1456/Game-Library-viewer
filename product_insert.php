<?php
error_reporting(E_PARSE | E_ERROR);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaming";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$product_id=$_POST["L1"];
$product_name=$_POST["L2"];
$product_price=$_POST["L3"];
$quantity_available=$_POST["L4"];
$product_description=$_POST["L5"];
$d_id=$_POST["L6"];


$sql = "INSERT INTO products  VALUES ('$product_id','$product_name','$product_price','$quantity_available','$product_description','$d_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>