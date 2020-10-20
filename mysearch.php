<?php
include "db.php";
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$server_time = date("Y-m-d H:i:s");
	if(isset($_POST['text'])){

		$msg = mysqli_real_escape_string($conn,$_POST["text"]);
		// $query =mysqli_query($conn,"SELECT * FROM questions WHERE question RLIKE '[[]]".$msg."[[]]'" );
		$query =mysqli_query($conn,"SELECT * FROM questions WHERE question LIKE '%{$msg}%'");
		$count = mysqli_num_rows($query);

		if($count == "0"){
			$data = "Chúng tôi sẽ liên hệ với bạn sớm nhất có thể!";
			$query4 = mysqli_query($conn,"insert into chats(user,chatbot,date) values ('$msg','$data','$server_time')");
		}else{
			while($row = mysqli_fetch_array($query)){
				$data = $row['answer'];
				$query4 = mysqli_query($conn,"insert into chats(user,chatbot,date) values ('$msg','$data','$server_time')");
			}
		}
	}
	
?>