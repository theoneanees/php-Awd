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

//method 1

// $sql = "CREATE TABLE IF NOT EXISTS `awd entry board`.`paper1` (`sno` INT(3) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `marks` INT(3) NOT NULL , PRIMARY KEY (`sno`))";


//method 2

// SQL to create table
// $sql = "CREATE TABLE IF NOT EXISTS stuData (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

//method 3

// $sql  = "CREATE TABLE IF NOT EXISTS bloodGroup
// (`sno` INT(3) NOT NULL AUTO_INCREMENT , `group No` VARCHAR(20) NOT NULL , `pateint name` VARCHAR(20) NOT NULL , `cell No` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`))";

echo "<br>";


if (mysqli_query($conn, $sql)) {
    echo "Table paper1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
echo "<br>";
