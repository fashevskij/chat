<div class="list">
	<form class="search" method="POST">
		<input type="text" name="search-text">
		<button type="submit" id="send">
			<img src="images/search.png">
		</button>
	</form>
	<ul>
		<?php
		//include - подключить файл, а имеено список контактов 
		include $_SERVER['DOCUMENT_ROOT'] . "/parts/list.php";
		?>
	</ul>
</div>
<div class="message">
	<?php
	if (isset($_GET["user"]) && $_GET["user"] != $_COOKIE["id"]) {
		$sql = "SELECT * FROM users WHERE id_User=" . $_GET["user"];
		$result = mysqli_query($connect, $sql); //оправляем запрос
		$count_users = mysqli_num_rows($result); //получаем результат совпадений
		//извлекаем результат в запроса
		$user = mysqli_fetch_assoc($result);
	?>
		<div class="check-user">
			<h2>Сhat with <?php echo $user["name"]; ?></h2>
		</div>

		<div class="sms" is="sms">
			<?php
			//include - подключить файл, а имеено список сообщений
			include $_SERVER['DOCUMENT_ROOT'] . "/parts/message.php";
			?>
		</div>

		<form class="form" method="POST">
			<input type="hidden" name="id_User_2" value="<?php echo $_GET["user"]; ?>">
			<input type="hidden" name="id_User" value="<?php echo $_COOKIE["id"]; ?>">
			<textarea style="font-family: Bradley Hand, cursive;" name="text"></textarea>
			<button type="submit" id="send_sms">
				<img src="../images/send.png">
			</button>
		</form>
	<?php
	}
	?>
</div>