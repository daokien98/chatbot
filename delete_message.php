<?php
	include "db.php";

	$query = mysqli_query($conn,"UPDATE chats SET del_msg='0'");

?>