<?php
include "configs/db.php";

//если введены логин и пароль и они не пусты
if (isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] !=""){
	// делаем запрос к бд выбрать users таблицу где емайл  и пароль равны введенному 
	$sql = "SELECT * FROM `users` WHERE `email` LIKE '" . $_POST["email"] . "' AND `password` LIKE '" . $_POST["password"] . "'";
	//выполняем запрос к базе данных
	$result = mysqli_query($connect, $sql);
	//получаем число результатов
	$col_users = mysqli_num_rows($result);
	//если число результатов равно 1(было найдено совпадение с введенными данными)	
	if ($col_users == 1) {
		//извлекаем результат в запроса
		$user = mysqli_fetch_assoc($result);
		//создаем куки для хранения данных пользователя
		setcookie("id", $user["id_User"], time()+3600);
	}else{//если нет то
		echo "<h2>Логин или пароль не верны</h2>";	
	}
}
?>
<div class="modal" id="authorization" >
			<div class="close">X</div>
			<h2>Авторизация</h2>
	<div class="positions">
		<form action="login.php" method="POST">
			<p>введите свой имейл: <br/>
			<input type="text" name="email">
			</p>
			<p>введите свой пароль: <br/>
			<input type="password" name="password">
			</p>
			<!--type="sumbit - чтобы данные отправлялись на сервер-->
			<button type="submit">Войти</button>
			<button type="button"id="registr">Регистрация</button>
		</form>
	</div>
</div>
	

