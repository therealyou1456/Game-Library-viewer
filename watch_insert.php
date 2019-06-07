<?php
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
$unique_id=$_POST["L1"];
$console=$_POST["L2"];
$delay=$_POST["L3"];
$w_id=$_POST["L4"];



$sql = "INSERT INTO watch_games  VALUES ('$unique_id','$console','$delay','$w_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>