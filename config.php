<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "animal";

$con = mysqli_connect($server, $user, $pass, $db);

if (!$con == true) {
    echo "field to connect " . $con->connect_error;
} 
// else {
//     echo "connect";
// }
?>