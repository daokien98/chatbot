<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testchat";

	$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn){
		
	}else{
		echo "Kết nối thất bại!";
	}
?>
