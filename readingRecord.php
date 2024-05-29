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

$sql = "SELECT * FROM paper1";
$result = mysqli_query($conn, $sql);

//displaying the data without table
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"]. " - Marks: " . $row["marks"]. "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM paper1";
$result = mysqli_query($conn, $sql);

//displaying the data with table
if (mysqli_num_rows($result) > 0) {
    echo '<table border = "2">';
echo "<tr><th>Name</th><th>Marks</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $row["name"] . "</td><td>" . $row["marks"] . "</td></tr>";
}
echo "</table>";
} else {
    echo "0 results";
}
