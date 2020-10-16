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
	<div class = "message"">
		<div id="sms">
		    <?php

		     //include - подключить файл, а имеено список сообщений
		   include "addsms.php";
		    ?>
		</div> 
		
		<form class="form" method="POST">
			<?php
		if (isset ($_GET["user"])){
		?>    
			<input type = "hidden" name="id_User_2" value="<?php echo $_GET["user"]; ?>">
			<input type = "hidden" name="id_User" value="<?php echo $_COOKIE["id"]; ?>">
			<textarea name="text"></textarea>
			<button type="submit" id="send_sms" >
			<img src="../images/send.png">	
			</button>
			<?php
			}
			?>
		</form>
	
</div>
</div>