<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "awd entry board";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql =   "INSERT INTO `paper1` (`name`, `marks`) VALUES ('Anno', '36')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}