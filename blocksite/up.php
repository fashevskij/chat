
<div id="up">
	<div id="menu">
		<a href="/">Home</a>
			<a href="#" id="open-contact">Contact</a>
			<?php
			//если существует такой пльзователь
			if (isset($_COOKIE["id"])){
				$sql = "SELECT * FROM users WHERE id_User=" . $_COOKIE["id"];
				$result = mysqli_query($connect, $sql);
				$user = mysqli_fetch_assoc($result)
				?>
				<a href="#">Settings</a>
			
				<a href="exit.php"><?php echo $user["name"]; ?> Log out</a>
				<?php
			}else{
				?>
				<a href="" id="account">Login</a>
				<a href="" id="registr">Registration</a>
				<?php
			}
			?>			
	</div>
</div>



