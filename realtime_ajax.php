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
		$result = "";

		$sql = "SELECT * from chat where (sender = ? and receiver = ?) or (sender = ? and receiver = ?)";
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("iiii", $sender, $receiver, $receiver, $sender);
		$stmt->execute();
		$res = $stmt->get_result();

		while ($row = $res->fetch_assoc()) {
			if($row['sender'] == $sender){
				$result .= "<div id='txtkanan'>". $row['message'] ."</div><br>";
			}else{
				$result .= "<div id='txtkiri'>". $row['message'] ."</div><br>";
			}
		}
		echo $result;
	}
?>