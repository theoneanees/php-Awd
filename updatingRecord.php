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

echo "<br>";


$sql = "UPDATE paper1 SET marks='45' WHERE sno ='3'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
