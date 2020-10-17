<?php
include "configs/db.php";
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
			<button type="submit" name="registration">Регистрация</button>
			</p>
		</form>	
	</div>
</div>

<?php
//если введены логин и пароль и они не пусты и была нажата кнопка регистарции
if (isset($_POST["registration"]) && $_POST["password"] !="" && $_POST["email"] != ""){
$sql = "SELECT * FROM `users` WHERE `email` LIKE '" . $_POST["email"] . "'"; 
$result = mysqli_query($connect, $sql);//оправляем запрос
$col_users = mysqli_num_rows($result);//получаем результат совпадений
if($col_users > 0){
	echo "<h2>Произошла ошибка емацйл есть уже</h2>";
}else{
// Вставить в таблицу user введенные данныее нового пользователя
$sql = "INSERT INTO `users` ( `email`, `password`, `name`) VALUES ('" . $_POST["email"] . "', '" . $_POST["password"] . "', '" . $_POST["name"] . "')";
	//если запрос к бд выполнен успешно
	if(mysqli_query($connect, $sql)){
		echo "<h2>Пользователь добавлен</h2>";
		
	}
}
}
?>