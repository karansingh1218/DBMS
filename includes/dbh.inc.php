<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword= "";
$dBName = "NJIT";

// Create Connection
// Here we are using the MySQLI Object Oriented method to open a connection to MySQL.
$conn = new mysqli($servername, $dBUsername, $dbPassword, $dBName);
// $conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if ($conn ->connect_error) {
    die("Connection failed: ".$conn ->connect_error);
    
}

echo "Connected Succesfully<br>";

// if (!$conn){
//     die("Connection Failed: ".mysqli_connect_error());
// }

?>

