<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "awd lab";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



// SQL to create table
// $sql = "CREATE TABLE IF NOT EXISTS stuData (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// $sql  = "CREATE TABLE IF NOT EXISTS bloodGroup
// (`sno` INT(3) NOT NULL AUTO_INCREMENT , `group No` VARCHAR(20) NOT NULL , `pateint name` VARCHAR(20) NOT NULL , `cell No` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`))";

// echo "<br>";


// if (mysqli_query($conn, $sql)) {
//     echo "Table bloodGroup created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }
echo "<br>";

$sql = "INSERT INTO `bloodgroup` (`group No`, `pateint name`, `cell No`) VALUES ('O-', 'Sidra', '03151515115')";

if (mysqli_query($conn, $sql)) {
    echo "New record of blood group created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


// SQL to insert record
$sql = "INSERT INTO stuData (firstname, lastname, email)
VALUES ('lutfia', 'abdul Rehman', 'luffia@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record of group of studata created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn);