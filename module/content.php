<div id="content">
		<form class="search" method="POST">
			<input type="text" name="search-text">
			<button type="submit" id="send">
				<img src="images/search.png">
			</button>
		</form>
	</div>
	<div class="list" >
		<ul>
			<?php
         //include - подключить файл, а имеено список контактов 
         	include "list.php";    
			?>
		</ul>
	</div>
	<div class = "message">
		<?php
		if(isset($_GET["user"])){
		$sql = "SELECT * FROM users WHERE id_User=" .$_GET["user"]; 
		$result = mysqli_query($connect, $sql);//оправляем запрос
		$col_users = mysqli_num_rows($result);//получаем результат совпадений
			//извлекаем результат в запроса
			$user = mysqli_fetch_assoc($result);
		?>
		<div class="check-user">
		<div class="avatar">
		<img src=" <?php echo $user["photo"]; ?>">
		<h2>Сhat with <?php echo $user["name"]; ?></h2>
		</div>
		</div>
		<?php
		}else{
				$userid = $_POST["id_User_2"];
		}
		?>
		<div class="sms">
		    <?php
		     //include - подключить файл, а имеено список сообщений
		   include "smski.php";
		    ?>
		</div> 
		
		<form class="form" method="POST">
			<?php
		if (isset ($_GET["user"])){
		?>    
			<input type = "hidden" name="id_User_2" value="<?php echo $_GET["user"]; ?>">
			<input type = "hidden" name="id_User" value="<?php echo $_COOKIE["id"]; ?>">
			<textarea style="font-family: Bradley Hand, cursive;"name="text"></textarea>
			<button type="submit" id="send_sms" >
			<img src="../images/send.png">	
			</button>
			<?php
			}
			?>
		</form>
	
</div>
</div>