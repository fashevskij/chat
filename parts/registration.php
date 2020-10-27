<?php
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
?>
<div class="modal" id="registration">
	<div class="close">X</div>
	<h2>Registration</h2>
	<div class="positions">
		<form method="POST" id="id_form" onsubmit="javascript:return validate('id_form','email');">
			<p>
				Your name: <br />
				<input type="text" name="name">
			</p>
			<p>
				Your e-mail: <br />
				<input type="text" id="email" name="email">
			</p>
			<p>
				Your password: <br />
				<input type="password" name="password">
			</p>
			<p>Select male</p>
			<select name="male">
				<option value="images/user4.png">Man</option>
				<option value="images/user1.png">Woman</option>
			</select>
			<p>
				<button type="submit" name="registration">Registration</button>
			</p>
		</form>
	</div>
</div>

<?php
//если была нажата кнопка регистрации, и пароль с логином не пусты
if (isset($_POST["registration"]) && $_POST["password"] != "" && $_POST["email"] != "") {
	//создаем запрос где таблицу с юзерами проверяем эмейл введенный при регистрации сущесвтует такой или нет
	$sql = "SELECT * FROM `users` WHERE `email` LIKE '" . $_POST["email"] . "'";
	$result = mysqli_query($connect, $sql); //оправляем запрос
	$count_users = mysqli_num_rows($result); //получаем результат совпадений
	if ($count_users > 0) { //если резульатов больше 1 значи существует
		echo "<h2>Error email is already</h2>";
	} else { //если 0 тогда
		// Вставить в таблицу user введенные данныее нового пользователя
		$sql = "INSERT INTO `users` ( `email`, `password`, `name`, `photo`) VALUES ('" . $_POST["email"] . "', '" . $_POST["password"] . "',
		'" . $_POST["name"] . "','" . $_POST["male"] . "')";
		//если запрос к бд выполнен успешно
		if (mysqli_query($connect, $sql)) {
			echo "<h2>User add</h2>";
		}
	}
}
?>