<?php  
	session_start();
	include("connect.php");
	$mysqli = connect();
	
	if($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
	}else{
		$sender = $_POST['sender'];
		$receiver = $_POST['receiver'];
		$message = $_POST['message'];

		$sql = "INSERT into chat (sender, receiver, message) values (?, ?, ?)";
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("sss", $sender, $receiver, $message);
		$stmt->execute();
		
		if($mysqli->query($sql)){
			$result = "";
		}else{
			$resut = "Error";
		}
	}
?>