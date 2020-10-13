<?php
//Модальное окно контактов
?>
<div class="modal" id="contacts-modal">
		<div class="close">X</div>
		<ul id="frendList">
			<?php
			//Возвращаем HTML с пользователями
			$i = 0;//переменная для перебора пользователей
			//создаем запрос к бд выбирая всех юзеров кроме авторизированного
			$sql = "SELECT * FROM users WHERE id_User!=" . $user_id; 
			$result = mysqli_query($connect, $sql);//оправляем запрос
			$col_users = mysqli_num_rows($result);//получаем результат совпадений
			//создаем цикл где перебирем всех пользоваетелей из базы данных
			while ($i < $col_users) {
				//извлекаем результат в запроса
				$user = mysqli_fetch_assoc($result);
				   //создаем html с учетом результата забпроса и выводим
	   			?>
				<li>
					<div class="avatar">
					<img src=<?php echo $user["photo"]; ?>>
					</div>
					<h2><?php echo $user["name"]; ?></h2>
					<?php
					//создаем запрос к таблице друзе и проверяем кто добавлен а кто нет
						$sql = "SELECT * FROM frends WHERE 
						user_1=" . $user_id . " AND user_2=" . $user["id_User"] . 
						" OR user_1=" . $user["id_User"] . " AND user_2=" . $user_id;

						$frendsResult = mysqli_query($connect, $sql);
						$col_frends = mysqli_num_rows($frendsResult);
						if ($col_frends > 0) {//переберем ответы от базы данных и если добавлен пользователь то выводим
							?>
							<div data-link="http://chat.local/delete_friends.php?user=<?php echo $user["id_User"]; ?>"onclick="dellFrends(this)" >Удалить из друзей </div><?php	
						}else{//если нет то выводим
							?>
							<div data-link="http://chat.local/add_friends.php?user=<?php echo $user["id_User"]; ?> "onclick="addFrends(this)">Добавить в друзья </div>
						<?php } ?>
				</li>
				<?php
				$i++;	
			}
			?>		
		</ul>		       
</div>
