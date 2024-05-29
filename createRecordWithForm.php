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
        <form action="createRecordWithForm.php" method="post">
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