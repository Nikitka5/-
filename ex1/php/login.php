<?php
require_once('db.php');

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email) || empty($password))
{
    echo "заполните все поля";
} else {
    $sql = "SELECT * FROM `users3` WHERE email = '$email' AND password = '$password' ";
    $result = $conn ->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result-> fetch_assoc()){
            echo "Добро пожаловать" . $row['email'];
        }
    } else {
        echo "нет тыкого пользователя";
    }
}