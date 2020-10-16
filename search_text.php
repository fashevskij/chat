<?php
include "configs/db.php";
include "configs/Settings.php";
//создаем запрос к базе данных
$sql = "SELECT * FROM users WHERE id_User!=" . $user_id;
$result = mysqli_query($connect, $sql);
$col_users = mysqli_num_rows($result);
?>

<?php
$i = 0;
$a = false; 

	while ($i < $col_users) {
		$user = mysqli_fetch_assoc($result);
		$search = stripos($user["name"], $_POST["search-text"]);
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
