<?php
//the object oriented way of conection
$servername = "localhost";
$username = "";
$password = "";
$dbname = "bestcare";
// Create connection
$conn = new mysqli(
);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>