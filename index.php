<?php
	session_start();
	include("connect.php");
	$mysqli = connect();

	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		$id = $_SESSION['iduser'];
		$name = $_SESSION['name'];
	}else{
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
	<form method="post" action="login_process.php"  enctype="multipart/form-data">
		<input type="submit" name="btnlogout" value="LOGOUT">
	</form>
	<label>Welcome <?php echo $name ?>!</label><br>
	<label>List Teman</label>
	<select id="listuser">
		<option value="">Pilih Teman</option>
		<?php  
			$sql = "SELECT * from users where iduser != ?";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("i",$id);
			$stmt->execute();
			$res = $stmt->get_result();
			while ($row = $res->fetch_assoc()) {
				echo "<option value='".$row['iduser']."'>".$row['name']."</option>";
			}
		?>
	</select><br>

	<div id="container_chatbox">
		<div id="container_content">

		</div>
		<div id="textbox">
			<input type="textbox" id="txtmessage"><input type="button" id="btnsend" value="SEND">
		</div>
	</div>

	<script type="text/javascript">
		$('body').on('change', '#listuser', function(){
			var receiver = $("#listuser").val();
			var sender = '<?php echo $id ?>';
			setInterval(function(){
				$.ajax({
					method: "post",
					url: "realtime_ajax.php",
					data: {sender: sender,
							receiver: receiver},
					dataType: "text",
					success:function(data){
						$('#container_content').html(data);
					}
				});
			}, 300);
		});

		$('body').on('click', '#btnsend', function(){
			var receiver = $("#listuser").val();
			var sender = '<?php echo $id ?>';
			var message = $("#txtmessage").val();

			$.ajax({
				method: "post",
				url: "send_ajax.php",
				data: {sender: sender,
						receiver: receiver,
						message: message},
				dataType: "text",
				success:function(data){
					if(data === "error"){
						alert("Error");
					}
				}
			});
		});
	</script>
</body>
</html>