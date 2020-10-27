<?php
include $_SERVER['DOCUMENT_ROOT']."/configs/db.php";
//создаем запрос к базе данных для изменения статуса при выходе
$status = "UPDATE `users` SET `status` = '0' WHERE `id_User` =" . $_COOKIE["id"]; 
mysqli_query($connect, $status);//выполняем запрос
setcookie("id","", 0, "/");//очистим куки (при выходе из аккаунта)
//перейдем на главную
header("location: /");
