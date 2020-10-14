<?php
include "configs/db.php";
include "configs/Settings.php";
/*
1. Создать таблицу для дрзей
2. Сделать ссылку на добавление в друзья
3. Сделать страницу обработчик где добавляем в базу данных выбраного пользователя
4. Перенапрявляем на главную страницу

*/

if (isset ($_GET["user"])) {
}
$sql = "INSERT INTO frends (user_1, user_2) VALUES ('" . $user_id . "', '" . $_GET["user"] . "')";
if (mysqli_query($connect, $sql)){
	include "module/contact.php";
}else{
	echo "<h2>Ошибка</h2>";
}

?>