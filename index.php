<?php

// echo "I'm Sidra Gul";
// echo "Hello, World!";
// echo "<br>";
// echo "wlcome to php";


// $name = "Zakia"; // This is a string variable
// $age = 30; // This is an integer variable
// $isMarried = true; // This is a boolean variable

// echo "<br>";
// echo "Name: " . $name . "<br>";
// echo "Age: " . $age . "<br>";
// echo "Married: " . ($isMarried ? "Yes" : "No");

// echo "<br>";

// // if ($age >= 35) {
// //     echo "You are an adult.";
// // }
// echo "<br>";

// $age1 = 15;
// if ($age1 >= 18) {
//     echo "You are an adult.";
// }  elseif ($age1 < 18) {
//     echo "You are a teenager.";
// } else {
//     echo "You are an adult.";
// }


// echo "<br>";

// $month = "Dec";
// switch ($month) {
//     case "Jan":
//         echo "Month is january.";
//         break;
//     case "feb":
//         echo "month is february.";
//         break; 
//     case "Mar":
//         echo "Month is march.";
//         break;
//     case "Dec";
//         echo "Month is december.";
//         break;
//     default:
//         echo "Invalid month.";
// }

// $count = 10;
// while ($count < 5) {
//     echo "Count is " . $count . "<br>";
//     $count++;
// }

// $count = 10;
// do {
//     echo "Count: " . $count . "<br>";
//     $count++;
// } while ($count < 5);


// for ($count = 0; $count < 5; $count++) {
//     echo $count . "<br>";
// }

// $names = array("Maira", "Tazila", "Tehmina", "Zakia", "Sidra", "Hizba", "Laiba", "Hajira");
// foreach ($names as $nom) {
//     echo "NOm is ". $nom . "<br>";
// }


// function greet() {
//    echo "Hello, ";
// }

// greet();


// function addNumbers($num1, $num2) {
//     echo $num1 + $num2;
// }

// addNumbers(15, 10);

// $country = "Pakistan";
// $city = "Quetta";

// if($country == "Pakistan" )
// {
//     if($city == "Karachi")
//     {
//         echo "Welcome to Karachi";
//     }
//     else
//     {
//         echo "you're not from Karachi.";
//     }
// }
// else
// {
//     echo "YOu're not in Pakistan.";
// }


// for ($count = 1; $count <= 5; $count++) {
//    for($count1 = 1; $count1 <= $count; $count1++) {
//        echo "🤩";  
//    }
//    echo "<br>";
// }

// *
// **
// ***
// ****
// *****

?>




<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        a {
            color: purple;
            text-decoration: none;
            /* font-style: italic; */
            font-weight: bold;
        }
        a:hover {
            color: #5a5a5a;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f8f8;
        }
        li:hover {
            background-color: #e8e8e8;
        }
    </style>
</head>
<body>
    <ul>
        <?php
        $files = scandir(__DIR__);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..' && $file != '.git' && $file != 'index.php') {
                echo "<li><a href=\"$file\">$file</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>


