<?php
require_once('db.php');
$email = $_POST['email'];
$sname = $_POST['sname'];
$password = $_POST['password'];

    $sql = "INSERT INTO users3 (email, sname, password) VALUES ('$email', '$sname', '$password')";
    if ($conn->query($sql) === TRUE){
        echo "Успешная регистрация";
    } else {
        echo "Ошибка:" . $conn->error;
    }

?>