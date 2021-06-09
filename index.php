<?php
	session_start();
	include("connect.php");
	$mysqli = connect();

	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		$id = $_SESSION['iduser'];
		$name = $_SESSION['name'];

		$sql = "UPDATE users set status = 'Online' where iduser = $id";
		$res = $mysqli->query($sql);
	}else{
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<div class="wrapper">
	<!-- <form method="post" action="login_process.php"  enctype="multipart/form-data">
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
	</div> -->
	<header>
			<div class="pembungkus-kiri">
				<div class="gambar">
					<img src="billy.jpg" alt="">
				</div>
				<div class="nama">
					<h4>Billy Renatasivu</h4>
				</div>
			</div>
			<a href="#" class="pembungkus-kanan">Logout</a>
	</header>
	<nav>
		<input type="text" placeholder="Search..">
	</nav>
	<aside>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
		<div class="list-chat">
			<div class="profile-picture">
				<img src="billy.jpg">
			</div>
			<div class="info-chat">
				<div class="profile-name">
					<h5>Venansius Mario</h5>
				</div>
				<div class="chat-content">
					<p>Test Message</p>
				</div>
			</div>
		</div>
	</aside>
	<main>
		<div class="content">
			<div class="chat-keluar">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-masuk">
				<img src="billy.jpg" alt="">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-keluar">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-masuk">
				<img src="billy.jpg" alt="">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-keluar">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-masuk">
				<img src="billy.jpg" alt="">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-keluar">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-masuk">
				<img src="billy.jpg" alt="">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
		</div>
		

		<div class="send-message">
			<img src="">
			<input type="text">
		</div>
	</main>
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