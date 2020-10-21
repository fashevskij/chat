<?php
include "configs/db.php";
//создаем запрос к базе данных для изменения статуса при выходе
//в нашем случае это будет работать с ajax с проверкой закрытия страницы без выхода с аккаунта
$status = "UPDATE `users` SET `status` = '0' WHERE `id_User` =" . $_COOKIE["id"]; 
mysqli_query($connect, $status);//выполняем запрос