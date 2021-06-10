<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="css/css.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="kotak-login">
		<form method="post" action="process.php"  enctype="multipart/form-data">
			<div class='judul-chat'>
				<h1>Nge-Chat</h1>
		</div>
			<div class="form-control">
				<div class="div-label">
					<label for="">Username</label>
				</div>
				<div class="div-control">
				<input type="text" placeholder="Username" name="username"></div>
			</div>
			<div class="form-control">
				<div class="div-label">
					<label for="">Password</label>
				</div>
				<div class="div-control">
				<input type="password" placeholder="Password" name="password"></div>
			</div>
			<div class="button">
				<input type="submit" name="btnlogin" value="LOGIN">
			</div>
			<footer>
				<p>
					Don't have account? <a href="register.php">Sign Up</a>
				</p>
			</footer>
		</form>
	</div>
	<script type="text/javascript">
		
	</script>
</body>
</html>