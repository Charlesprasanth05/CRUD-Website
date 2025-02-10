<?php  

$sname = "localhost";
$uname = "itech59";
$password = "U6Qd?gEAjcy3";

$db_name = "itech59";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}