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
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Index</title>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="css.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
					<h4><?php echo $name; ?></h4>
				</div>
			</div>
			<a href="#" class="pembungkus-kanan">Logout</a>
	</header>
	<nav>
		<input type="text" placeholder="Search..">
	</nav>
	<aside>
		<?php  
			$sql = "SELECT * from users where iduser != ?";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("i",$id);
			$stmt->execute();
			$res = $stmt->get_result();
			while ($row = $res->fetch_assoc()) {
				$sql = "SELECT * from chat where (sender = ? and receiver = ?) or (sender = ? and receiver = ?) order by idchat desc limit 1";
				$stmt = $mysqli->prepare($sql);
				$stmt->bind_param("iiii", $id, $row['iduser'], $row['iduser'], $id);
				$stmt->execute();
				$res2 = $stmt->get_result();
				$row2 = $res2->fetch_assoc();
				if(mysqli_num_rows($res2) > 0) $lastmsg = $row2['message'];
				else $lastmsg = "No New Message"
				
				(strlen($lastmsg) > 28) ? $row2['message'] = substr($lastmsg, 0, 28).'...' : $row2['message'] = $lastmsg;

				echo '<div class="list-chat" idreceiver=' . $row['iduser'] . '>
						<div class="profile-picture">
							<img src="billy.jpg">
						</div>
						<div class="info-chat">
							<div class="profile-name">
								<h5>' . $row['name'] . '</h5>
							</div>
							<div class="chat-content">
								<p>' . $lastmsg . '</p>
							</div>
						</div>
					</div>';
			}
		?>
		
	</aside>
	<main>
		<div class="start-chat" id='start-chat'>
			<h1>Select friends to start chat!</h1>
		</div>
		<div class="content hidden" id='content'>
			
		</div>
		

		<div class="send-message hidden" id='send-message'>
			<img src="mario.jpg">
			<input type="text" placeholder="Type a message...">
			<button><i class="fab fa-telegram-plane"></i></button>
		</div>
	</main>
	</div>

	<script type="text/javascript">
		var receiver;
		var sender;
		var interval;
		var screenWidth = screen.width;

		$('body').on('click','.list-chat', function(){
			var startChat = document.getElementById("start-chat");
			startChat.classList.add("hidden");
			var chatBox = document.getElementById("content");
			chatBox.classList.remove("hidden");
			var sendBox = document.getElementById("send-message");
			sendBox.classList.remove("hidden");
			if(screenWidth <= 576)
			{
				$('aside').hide();
				$('nav').hide();
				$('nav').addClass('hidden');
				$('aside').addClass('hidden');
				$('main').addClass('display-flex');
			}

			clearInterval(interval);
			receiver = $(this).attr('idreceiver');
			sender = <?php echo $id ?>;
			interval = setInterval(realtime, 300);
		});

		function realtime(){
			$.ajax({
				method: "post",
				url: "realtime_ajax.php",
				data: {sender: sender,
						receiver: receiver},
				dataType: "text",
				success:function(data){
					$('#content').html(data);
				}
			});
		}

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
		

		var globalResizeTimer = null;

		$(window).resize(function() {
			if(globalResizeTimer != null) window.clearTimeout(globalResizeTimer);
			globalResizeTimer = window.setTimeout(function() {
				if(screenWidth <= 576)
				{
					$('main').addClass('hidden');
				}
				else{
					$('main').addClass('display-flex');
				}
			}, 200);
		});
	</script>
</body>
</html>