<?php
include "configs/db.php";
//создаем запрос к базе данных и проверяем чтобы id пользователя в базе небыл равен вошедшему
$sql = "SELECT * FROM users WHERE id_User!=" . $_COOKIE["id"];
$result = mysqli_query($connect, $sql);//выполняем щапрос
$col_users = mysqli_num_rows($result);//получаем число результатов
?>

<?php
$i = 0;
$a = false; 
//создаем цикл для перебора результатов
	while ($i < $col_users) {
		$user = mysqli_fetch_assoc($result);//получаем результат в виде массива данных юзера
		//сравниваем введеный текст с именем в базе данных
		$search = stripos($user["name"], $_POST["search-text"]);
		//если результат не равне лжи то вывидем результат поиска запроса
		if ($search !== false) {
			?>
			<a class = "get-search"href="index.php?user= <?php echo $user["id_User"]; ?>">
                <div class="avatar">
				<img src=" <?php echo $user["photo"]; ?>">
				</div>
				<h2><?php echo $user["name"]; ?> </h2>
			    </a>
			 <?php
			$a = true;  
		}
		$i++;
	}	
	if ($a == false) {
		echo"<h2>". "Совпадений по поиску не найдено" . "</h2>";
	}

?>
