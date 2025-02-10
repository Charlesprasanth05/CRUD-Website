<?php 

$server = "localhost";
$user = "itech59";
$pass = "U6Qd?gEAjcy3";
$database = "itech59";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>