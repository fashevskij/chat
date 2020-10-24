<?php
include "configs/db.php";
?>
<div class="modal" id="authorization">
	<div class="close">X</div>
	<h2>Authorization</h2>
	<div class="positions">
		<form method="POST">
			<p>e-mail: <br />
				<input type="text" name="email">
			</p>
			<p>password: <br />
				<input type="password" name="password">
			</p>
			<!--type="sumbit - чтобы данные отправлялись на сервер-->
			<button type="submit" name="login">Enter</button>
			<button type="button" id="registr">Registration</button>
		</form>
	</div>
</div>

<?php
//если введены логин и пароль и они не пусты и была нажата кнопка войти
if (
	isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] != "" && isset($_POST["login"])
) {
	// делаем запрос к бд выбрать users таблицу где емайл  и пароль равны введенному 
	$sql = "SELECT * FROM `users` WHERE `email` LIKE '" . $_POST["email"] . "' AND `password` LIKE '" . $_POST["password"] . "'";
	//выполняем запрос к базе данных
	$result = mysqli_query($connect, $sql);
	//получаем число результатов
	$count_users = mysqli_num_rows($result);
	//если число результатов равно 1(было найдено совпадение с введенными данными)	
	if ($count_users == 1) {
		//извлекаем результат в запроса
		$user = mysqli_fetch_assoc($result);
		//создаем куки для хранения данных пользователя
		setcookie("id", $user["id_User"], time() + 3600);
		header("Location: /"); //обновляем страницу
		//создаем запрос к базе данных на обновление статуса пользователя
		$status = "UPDATE `users` SET `status` = '1' WHERE `id_User` =" . $user["id_User"];
		mysqli_query($connect, $status); //выполняем запрос
	} else { //если нет то
		echo "<h2>Логин или пароль не верны</h2>";
		header("Location: /");
	}
}
?>