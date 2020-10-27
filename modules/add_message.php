<?php
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
/*
===============
Отправка сообщений
*/
//если сужествует поле ввода текста и оно не пустое
if (isset($_POST["text"]) && $_POST["text"] != "") {
    // создаем запрос в таблицу смс для вставки текста от отправленного пользователя к получившему и сам текст
    $sql = "INSERT INTO `message` (`id_User`, `id_User_2`, `text`) VALUES ('" . $_COOKIE["id"] . "', '" . $_POST["id_User_2"] . "', '" . $_POST["text"] . "')";
    mysqli_query($connect, $sql); //выполняем запрос

}
include $_SERVER['DOCUMENT_ROOT'] . "/parts/message.php";
