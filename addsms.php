<?php
include "configs/db.php";
include "configs/Settings.php";
/*
===============
Отправка сообщений
*/
if (isset($_POST["text"]) && $_POST["text"] != ""){
// Вставить в таблицу "название таблицы"()
$sql = "INSERT INTO `smski` (`id_User`, `id_User_2`, `text`) VALUES ('". $_COOKIE["id"] . "', '" . $_POST["id_User_2"] . "', '" . $_POST["text"] . "')";
mysqli_query($connect, $sql);

}

include "module/smski.php";
?>