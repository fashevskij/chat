<?php
include "configs/db.php";
include "configs/Settings.php";


if (isset ($_GET["user"])) {
$sql = "DELETE FROM frends WHERE `frends`.`User_1` =" . $user_id . " AND `frends`.`User_2` =" . $_GET["user"];
if (mysqli_query($connect, $sql)){
	include "module/contact.php";
}
}
?>