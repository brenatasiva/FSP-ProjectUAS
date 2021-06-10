<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
					<label for="">Display Name</label>
				</div>
				<div class="div-control">
				<input type="text" placeholder="Display Name" name="displayname"></div>
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
				<input type="password" placeholder="Confrim Password" name="repassword"></div>
			</div>
			<div class="form-control">
				<div class="div-label">
					<label for="">Insert Your Picture</label>
				</div>
				<div class="div-control">
				<input type="file" placeholder="Profile picture" name="gambar" accept='.jpg, .png'></div>
			</div>
			<div class="button">
				<input type="submit" name="btnregister" value="Register">
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