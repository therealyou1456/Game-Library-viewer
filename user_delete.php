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
$unique_id=$_POST["t1"];
// sql to delete a record
$sql = "DELETE FROM users WHERE unique_id='$unique_id' " ;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>