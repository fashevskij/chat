<?php
include "configs/db.php";
include "configs/Settings.php";

$sql = "SELECT * FROM users WHERE id_User!=" . $user_id;
// Выполнить sql запрос в базе данных
$result = mysqli_query($connect, $sql);
$col_users = mysqli_num_rows($result);
?>
<div id="list">
		<ul>
<?php
$i = 0;
$a = false; 

	while ($i < $col_users) {
		$user = mysqli_fetch_assoc($result);
		$search = stripos($user["name"], $_POST["search-text"]);
		if ($search !== false) {
			?>
			<li>
			<a href="index.php?user= <?php echo $user["id_User"]; ?>">
                <div class="avatar">
				<img src=" <?php echo $user["photo"]; ?>">
				</div>
				<h2><?php echo $user["name"]; ?> </h2>
				<p> .</p>
				<div class="time">09:40</div>
			    </a>
			 </li>
			
			 <?php
			$a = true;  
		}
		$i++;
	}
		
	if ($a == false) {
		echo"<h2>". "Совпадений по поиску не найдено" . "</h2>";
	}

?>
</ul>
</div>