<?php
include "configs/db.php";
?>

<div class="modal "id="settings-modal">
		<div class="close">X</div>
        <h2>Settings</h2>
    <div class="positions">
		<form method="POST">
			<p>
				New name: <br/>
			<input type="text" name="name">
			</p>
			<p>
			<p>
				New password: <br/>
			<input type="password" name="password1">
			</p>
			<p>
				Repeat new password: <br/>
			<input type="password" name="password2">
			</p>
			<p>
			<!--type="sumbit - чтобы данные отправлялись на сервер-->
			<button type="submit" name="settings">Change</button>
			</p>
		</form>	
	</div>
</div>
<?php
//Проверяем если была нажата кнопка изменить, пароли не пусты
if(isset($_POST["settings"]) && $_POST["password2"] != "" && $_POST["password1"] != "" ){
	//проверяем что пароли должны совпадать между собой
	if ($_POST["password1"] == $_POST["password2"]){
		//создаем запрос к базе данных где пароль будет равен введенному а польхователь тот который онлайн
	$sql = "UPDATE `users` SET `password` = '" . $_POST["password1"] . "' WHERE `id_User` = '" . $_COOKIE["id"] . "'";
	//отправляем заппрос
	mysqli_query($connect, $sql);
	echo"пароль успешно изменен! ";
	}else{
	echo "пароли не совпадают! ";
	}
}
//проверяем если кнопка была нажата и именя пользователя не пустое
if(isset($_POST["settings"]) && $_POST["name"] != ""){
	//создаем зпрос к бд и говорим что нужно обновить данные имени пользователя где id вошедшего пользолвателя в куках равно id в базе данных
	$sql = "UPDATE `users` SET `name` = '" . $_POST["name"] . "' WHERE `id_User` = '" . $_COOKIE["id"] . "'";
	mysqli_query($connect, $sql);//выполняем запрос
	echo"имя успешно изменено! ";
}

?>