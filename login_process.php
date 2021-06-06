<?php  
	session_start();
	include("connect.php");
	$mysqli = connect();
	
	if($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
	}else{
		if(isset($_POST['btnlogin'])){
			if(isset($_SESSION['username'])){
			header("location: index.php");
			}else{
				$username = $_POST['username'];
				$password = $_POST['password'];

				$sql = "SELECT * FROM users WHERE username = ? and password = ?";
				$stmt = $mysqli->prepare($sql);
				$stmt->bind_param("ss", $username, $password);
				$stmt->execute();
				$res = $stmt->get_result();

				while ($row = $res->fetch_assoc()) {
					$_SESSION['username'] = $row['username'];
					$_SESSION['iduser'] = $row['iduser'];
					$_SESSION['name'] = $row['name'];
				}
				
			}
			header("location: index.php");
		}
		if(isset($_POST['btnregister'])){

		}
		if(isset($_POST['btnlogout'])){
			session_destroy();
			header("location: login.php");
		}
	}
?>