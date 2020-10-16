<?php
include "configs/db.php";
//очистим куки (при выходе из аккаунта)
$status = "UPDATE `users` SET `status` = '0' WHERE `id_User` =" . $_COOKIE["id"]; 
mysqli_query($connect, $status);
setcookie("id","", 0);
//перейдем на главную
header("location: /");

?>