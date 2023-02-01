<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "edesseg";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Sikertelen csatlakozás.')</script>");
}

?>
