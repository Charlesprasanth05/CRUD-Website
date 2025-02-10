<?php  

include "db_conn.php";

$sql = "SELECT * FROM users_crud ORDER BY id DESC";
$result = mysqli_query($conn, $sql);