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
		<header>
			<div class="pembungkus-kiri">
				<div class="gambar">
					<img src="billy.jpg" alt="">
				</div>
				<div class="nama">
					<h4><?php echo $name; ?></h4>
				</div>
			</div>
			<a href="login_process.php" class="pembungkus-kanan" name='btnlogout'>Logout</a>
		</header>
		<nav>
			<input type="text" placeholder="Search..">
		</nav>
		<aside id='aside'>

		</aside>
		<main>
			<div class="start-chat" id='start-chat'>
				<h1>Select friends to start chat!</h1>
			</div>
			<div class="content hidden" id='content'>
				
			</div>
			

			<div class="send-message hidden" id='send-message'>
				<img src="mario.jpg">
				<input type="text" placeholder="Type a message..." id='txtmessage'>
				<button id='btnsend'><i class="fab fa-telegram-plane"></i></button>
			</div>
		</main>
	</div>

	<script type="text/javascript">
		var receiver;
		var sender;
		var interval;
		var screenWidth = screen.width;

		$(document).ready(function() {
			sender = <?php echo $id ?>;
			setInterval(function(){
				$.ajax({
					method: "post",
					url: "load_ajax.php",
					data: {sender: sender},
					dataType: "text",
					success:function(data){
						$('#aside').html(data);
					}
				});
			}, 500);
 		});

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
			$(this).addClass('chat-clicked');
			clearInterval(interval);
			receiver = $(this).attr('idreceiver');
			interval = setInterval(realtime, 300);
			$('#txtmessage').focus();
			
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
			document.getElementById('txtmessage').value = '';
			$('#txtmessage').focus();

		});

		document.getElementById("txtmessage").addEventListener("keyup", function(event) {
			if (event.keyCode === 13) {
				event.preventDefault();
				document.getElementById("btnsend").click();
			}
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