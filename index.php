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
					<p>wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww</p>
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
		<div class="start-chat" id='start-chat'>
			<h1>Select friends to start chat!</h1>
		</div>
		<!-- <div class="nama-chat">
			<i class='fas fa-chevron-left'></i>
			<span>Venansius Mario</span>
		</div> -->
		<div class="content hidden" id='content'>
			<div class="chat-keluar">
			<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>				
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-masuk">
				<img src="billy.jpg" alt="">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
				<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>
			</div><div class="chat-keluar">
			<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>				
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-masuk">
				<img src="billy.jpg" alt="">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
				<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>
			</div><div class="chat-keluar">
			<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>				
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-masuk">
				<img src="billy.jpg" alt="">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
				<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>
			</div><div class="chat-keluar">
			<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>				
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-masuk">
				<img src="billy.jpg" alt="">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
				<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>
			</div><div class="chat-keluar">
			<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>				
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
			</div>
			<div class="chat-masuk">
				<img src="billy.jpg" alt="">
				<div class="details">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo tenetur mollitia, possimus illo dolor, consectetur libero dolores, sint iusto quasi, ut molestiae cum aliquid suscipit commodi nemo nam minus labore!</p>
				</div>
				<div class="information">
					<p>Read</p>
					<p>12.50 AM</p>
				</div>
			</div>
		</div>
		

		<div class="send-message hidden" id='send-message'>
			<img src="mario.jpg">
			<input type="text" placeholder="Type a message...">
			<button><i class="fab fa-telegram-plane"></i></button>
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
		// var body = document.getElementsByTagName("BODY")[0];
		// var screenWidth = body.offsetWidth;
		
		$('body').on('click','.list-chat', function(){			
			var screenWidth = $(window).width();
			if(screenWidth <= 576)
			{
				$('nav').addClass('hidden');
				$('aside').addClass('hidden');
				$('main').addClass('display-flex');
				$('main').removeClass('hidden');
			}
			var startChat = document.getElementById("start-chat");
				startChat.classList.add("hidden");
				var chatBox = document.getElementById("content");
				chatBox.classList.remove("hidden");
				var sendBox = document.getElementById("send-message");
				sendBox.classList.remove("hidden");
		});

		var globalResizeTimer = null;

		$(window).resize(function() {
			// if(globalResizeTimer != null) window.clearTimeout(globalResizeTimer);
			// globalResizeTimer = window.setTimeout(function() {
				
			// }, 1);
			// var screenWidth = screen.width;
			var screenWidth = $(window).width();
			var i = 0;
				if(screenWidth <= 576)
				{
					// i = i + 1;
					// if(i == 0){

					// }
						// $('main').addClass('hidden');
						
				}
				else{
					// $('main').addClass('display-flex');
					$('main').removeClass('hidden');
					$('main').removeClass('display-flex');
					$('nav').removeClass('hidden');
					$('aside').removeClass('hidden');
					i = 0;
				}
		});
	</script>
</body>
</html>