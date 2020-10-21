<?php
include "configs/db.php";
?>
<div class="modal "id="registration">
		<div class="close">X</div>
        <h2>Регистрация</h2>
    <div class="positions">
		<form method="POST" id="id_form"  onsubmit="javascript:return validate('id_form','email');">
			<p>
				введите ваше имя: <br/>
			<input type="text" name="name">
			</p>
			<p>
			<p>
				введите свой имейл: <br/>
			<input type="text" id="email" name="email">
			</p>
			<p>
				введите свой пароль: <br/>
			<input type="password" name="password">
			</p><p>выбирете пол</p>
			<select name="male">
			
			<option value="images/user4.png">мужчина</option>
			<option value="images/user1.png">женщина</option>
			</select>
			<p>
			<!--type="sumbit - чтобы данные отправлялись на сервер-->
			<button type="submit" name="registration" >Регистрация</button>
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

	$sql = "INSERT INTO `users` ( `email`, `password`, `name`, `photo`) VALUES ('" . $_POST["email"] . "', '" . $_POST["password"] . "',
		'" . $_POST["name"] . "','" . $_POST["male"] . "')";
		//если запрос к бд выполнен успешно
		if(mysqli_query($connect, $sql)){
			echo "<h2>Пользователь добавлен</h2>";
			
		}
	}
}

?>