<?php
$sql = "SELECT * FROM users WHERE id_User!=" . $user_id;
// Выполнить sql запрос в базе данных
$result = mysqli_query($connect, $sql);
$col_users = mysqli_num_rows($result);
	 
if (isset($_COOKIE["id"])){
		$i = 0;
		//пока в переменная и меньше чем количество пользователь то мы делаем вывод инфы
		while ($i < $col_users) {
			//mysqli_fetch_assoc - преобразовать данные пользователя в массив
		    $user = mysqli_fetch_assoc($result);
		   
		    ?>
			<li>
				<a href="index.php?user= <?php echo $user["id_User"]; ?>">
                <div class="avatar">
				<img src=" <?php echo $user["photo"]; ?>">
				</div>
				<h2><?php echo $user["name"]; ?> </h2>
			    </a>
			  </li>
			 <?php
			
			$i++;	
		  
			} 
		}else if (isset($_POST["search-text"])){
			include "search_text.php";
		}
		
		
	    ?>
	