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
				
				$sql = "UPDATE users set status = 'Online' where iduser = ?";
				$stmt = $mysqli->prepare($sql);
				$stmt->bind_param("i", $_SESSION['iduser']);
				$stmt->execute();
			}
			header("location: index.php");
		}
		if(isset($_POST['btnregister'])){
			$name = $_POST['displayname'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			$gambar = $_FILES['gambar'];

			if($password == $repassword){
				$sql = "SELECT * FROM users where username = ?";
				$stmt = $mysqli->prepare($sql);
				$stmt->bind_param("s", $username);
				$stmt->execute();
				$res = $stmt->get_result();
				
				if ($res->num_rows > 0) {
					header("location: register.php");
				} else {
					$sql = "INSERT INTO users (username, password, name) values (?,?,?)";
					$stmt = $mysqli->prepare($sql);
					$stmt->bind_param("sss", $username, $password, $name);
					$stmt->execute();
					$id = $stmt->insert_id;

					if(!empty($_FILES['gambar'])){
						$file_info = getimagesize($_FILES['gambar']['tmp_name']);
						if($_FILES['gambar']['type']=='image/jpeg' || $_FILES['gambar']['type']=='image/png'){
							$path = $_FILES['gambar']['name'];
							$ext = pathinfo($path, PATHINFO_EXTENSION);
							$sql = "INSERT into gambar (extention, iduser) values (?,?)";
							$stmt = $mysqli->prepare($sql);
							$stmt->bind_param("si", $ext, $id);
							$stmt->execute();
	
							move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/'.$id.".".$ext);
						}
					}

					header("location: login.php");
				}
			}
			
		}
		if(isset($_POST['btnlogout'])){
			$sql = "UPDATE users set status = 'Offline' where iduser = ?";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("i", $_SESSION['iduser']);
			$stmt->execute();

			session_destroy();
			header("location: login.php");
		}
	}
?>