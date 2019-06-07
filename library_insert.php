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
$variety_of_games=$_POST["L1"];
$game_list=$_POST["L2"];
$t_id=$_POST["L3"];
$unique_id=$_POST["L4"];
$storage_space=$_POST["L5"];



$sql = "INSERT INTO libraryaccess VALUES ('$variety_of_games','$game_list','$t_id','$unique_id','$storage_space')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>