
<ul>
	<?php
if (isset($_GET["user"]) && isset($_COOKIE["id"]) || isset($_POST["id_User_2"])) {
$userid = null;

if(isset($_GET["user"])){
		$userid = $_GET["user"];
}else{
		$userid = $_POST["id_User_2"];
}
// получаем все смс которые были отправлены пользователю
$sql = "SELECT * FROM smski" .  // выбераем все сообщения
 	" WHERE (id_User_2 =" . $userid .   //где id отправляемому польователю = $_GET["user"]
	 " AND id_User=" . $user_id . ")" . // и отправлено от пользователя с id = 1
	 " OR (id_User_2=" . $user_id . " AND id_User =" . $userid . ")"; //

$result = mysqli_query($connect, $sql);
$col_smski = mysqli_num_rows($result);
	$i = 0;
	while ($i < $col_smski) {	
			$sms = mysqli_fetch_assoc($result);
				?>
				<li>
					<div class="avatar">
					<img src="images/user1.png">
					</div>
					<?php
						//получаем sql запрос для вывода имени пользователя для с
						$sql = "SELECT  name FROM users WHERE id_User=" . $sms["id_User"];
						//выполняем запрос
						$user = mysqli_query($connect, $sql);
						//записываем  в переменную массив с данными пользователя
						$user = mysqli_fetch_assoc($user);
					?>
					<h2><?php echo $user["name"]; ?></h2>
					<p><?php echo $sms["text"]; ?></p>
					<div class="time"><?php echo $sms["time"]; ?></div>
				</li>
			<?php	
		    $i++;
		}
	  }
	?>		
</ul>

