<ul>
	<?php
	if (isset($_GET["user"]) && isset($_COOKIE["id"]) || isset($_POST["id_User_2"])) {
		$userid = null;

		if (isset($_GET["user"])) {
			$userid = $_GET["user"];
		} else {
			$userid = $_POST["id_User_2"];
		}
		// получаем все смс которые были отправлены пользователю
		$sql = "SELECT * FROM message" .  // выбераем все сообщения
			" WHERE (id_User_2 =" . $userid .   //где id отправляемому польователю = $_GET["user"]
			" AND id_User=" . $_COOKIE["id"] . ")" . // и отправлено от пользователя с id = 1
			" OR (id_User_2=" . $_COOKIE["id"] . " AND id_User =" . $userid . ")"; //

		$result = mysqli_query($connect, $sql);
		$count_message = mysqli_num_rows($result);
		$i = 0;
		while ($i < $count_message) {
			$message = mysqli_fetch_assoc($result);
	?>
			<li>
				<div class="avatar">
					<img src="images/user1.png">
				</div>
				<?php
				//создаем запрос выбираем имя пользователя с таблицы юзер где id пользователя равно id того кто отправил смс
				$sql = "SELECT  name FROM users WHERE id_User=" . $message["id_User"];
				//выполняем запрос
				$user = mysqli_query($connect, $sql);
				//записываем  в переменную массив с данными пользователя
				$user = mysqli_fetch_assoc($user);
				?>
				<h2 style="color:burlywood"><?php echo $user["name"]; ?></h2>
				<p><?php echo $message["text"]; ?></p>
				<div class="time" style="color:white"><?php echo $message["time"]; ?></div>
			</li>
	<?php
			$i++;
		}
	}
	?>
</ul>