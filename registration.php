<?php
include "configs/db.php";
//если введены логин и пароль и они не пусты
if (isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] !=""){

// Вставить в таблицу user введенные данныее нового пользователя
$sql = "INSERT INTO `users` ( `email`, `password`, `name`) VALUES ('" . $_POST["email"] . "', '" . $_POST["password"] . "', '" . $_POST["name"] . "')";
	//если запрос к бд выполнен успешно
	if(mysqli_query($connect, $sql)){
		echo "<h2>Пользователь добавлен</h2>";
		header("Location: /");
	}else{//весли нет то
		echo "<h2>Произошла ошибка</h2>". mysqli_error($connect);
		header("Location: /");
	}
}
?>
<div class="modal "id="registration">
		<div class="close">X</div>
        <h2>Регистрация</h2>
    <div class="positions">
		<form method="POST">
			<p>
				введите ваше имя: <br/>
			<input type="text" name="name">
			</p>
			<p>
			<p>
				введите свой имейл: <br/>
			<input type="text" name="email">
			</p>
			<p>
				введите свой пароль: <br/>
			<input type="password" name="password">
			</p>
			<p>
			<!--type="sumbit - чтобы данные отправлялись на сервер-->
			<button type="submit">Регистрация</button>
			</p>
		</form>	
	</div>
</div>