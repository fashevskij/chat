<?php
include "configs/db.php";
include "configs/settings.php";
include "login.php";
include "registration.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="up">
		<div class="logo">
			<img src="/images/Chat Folder.png"> <span><b>Web</b><i>Chat</i></span>
		</div>  
		<div class="menu">
				<?php
				//если существует такой пльзователь
				if (isset($_COOKIE["id"])){
					//создаем запрос к бд с получением авторизированного пользователя
					$sql = "SELECT * FROM users WHERE id_User=" . $_COOKIE["id"];
					$result = mysqli_query($connect, $sql);//выполняем запрос к базе данных
					$user = mysqli_fetch_assoc($result);//
					?>
					<a href="#" id="open-contact">Friends</a>
					<a href="#" id="settings">Settings</a>
					
					<a href="exit.php"><?php echo $user["name"];?> Log out</a>
					<?php	//кнопка с очисткой кук и перенаправлением на главную при выходе				
					include "module/contact.php";
					include "module/content.php";
					
				}else{
					?>
						<a href="#" id="account"><h2>Authorization</h2></a>	
					<?php	
				}
				?>			
		</div>
</div>
	<div class="home"></div>   
</body>
<script src="js/modal_close_btn.js"></script>
<script src="js/authorization.js"></script>
<script src="js/contact.js"></script>
<script src="js/friends_operation.js"></script>
<script src="js/sms.js"></script>
</html>
