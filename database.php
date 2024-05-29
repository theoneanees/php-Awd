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



// $sql = "CREATE TABLE IF NOT EXISTS `awd entry board`.`paper1` (`sno` INT(3) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `marks` INT(3) NOT NULL , PRIMARY KEY (`sno`))";



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

echo "<br>";


// if (mysqli_query($conn, $sql)) {
//     echo "Table paper1 created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }
// echo "<br>";

// $sql = "INSERT INTO `bloodgroup` (`group No`, `pateint name`, `cell No`) VALUES ('O-', 'Sidra', '0315151515')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record of blood group created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }


// SQL to insert record
// sql query
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $marks = $_POST['marks'];
$sql =   "INSERT INTO `paper1` (`name`, `marks`) VALUES ('$name', '$marks')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


$sql = "SELECT * FROM paper1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<table border = "2">';
    echo "<tr><th>Name</th><th>Marks</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row["name"] . "</td><td>" . $row["marks"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

//updating the record

// SQL to update record
$sql = "UPDATE paper1 SET marks='45' WHERE sno ='7'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

echo "<br>";

//sql to delete record

$sql = "DELETE FROM paper1 WHERE name='anno khan'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f8f8;
        }
        .form-field {
            margin-bottom: 10px;
        }
        .form-field label {
            display: block;
            margin-bottom: 5px;
        }
        .form-field input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-field input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .form-field input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="database.php" method="post">
            <div class="form-field">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-field">
                <label for="marks">Marks:</label>
                <input type="text" id="marks" name="marks">
            </div>
            <div class="form-field">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>



<!-- if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $marks = $_POST['marks'];
$sql =   "INSERT INTO `paper1` (`name`, `marks`) VALUES ('$name', '$marks')";

echo "<br>";



if (mysqli_query($conn, $sql)) {
    echo "New record of paper1 created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

$sql = "SELECT * FROM paper1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    // while($row = mysqli_fetch_assoc($result)) {
    //     echo "Name: " . $row["name"]. " - Marks: " . $row["marks"]. "<br>";
    // }
    echo '<table border = "2">';
echo "<tr><th>Name</th><th>Marks</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $row["name"] . "</td><td>" . $row["marks"] . "</td></tr>";
}
echo "</table>";
} else {
    echo "0 results";
} -->

<!-- 
can also use where clause 
e.g $sql = "SELECT * FROM paper1 WHERE marks > 30"; -->

<!--
// SQL to delete record
$sql = "DELETE FROM paper1 WHERE name='Hizba'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
} -->

<!--
// SQL to update record
$sql = "UPDATE paper1 SET marks='40' WHERE name='Hizba'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
} -->

<!--
    // how to use limit clause
    $sql = "SELECT * FROM paper1 LIMIT 2";
    $result = mysqli_query($conn, $sql);
    

    make the Inotes app given in tutotial 32 -->