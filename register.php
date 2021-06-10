<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="css.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="kotak-login">
		<form method="post" action="register_process.php"  enctype="multipart/form-data">
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
			<div class="form-control">
				<div class="div-label">
					<label for="">Confirm Password</label>
				</div>
				<div class="div-control">
				<input type="password" placeholder="Confrim Password" name="confirmpwd"></div>
			</div>
			<div class="form-control">
				<div class="div-label">
					<label for="">Insert Your Picture</label>
				</div>
				<div class="div-control">
				<input type="file" placeholder="Profile picture" name="gambar"></div>
			</div>
			<div class="button">
				<input type="button" name="btnlogin" value="Register">
			</div>
			<footer>
				<p>
					Already Have Account? <a href="login.php">Sign In</a>
				</p>
			</footer>
		</form>
	</div>
	<script type="text/javascript">
		
	</script>
</body>
</html>