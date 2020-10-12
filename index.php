<?php
include "configs/db.php";
include "configs/settings.php";
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
			<a href="#" id="account"><h2>Authorization</h2></a>	
		</div>
	</div>
	<div class="home">	
	<?php include "login.php"?>
	<?php include "registration.php"?>
    </div>   
</body>

<script src="js/modal_close_btn.js"></script>
<script src="js/authorization.js"></script>
</html>