<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "registerUser3";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Fialed". mysqli_connect_error());
}
?>