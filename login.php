<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error();//login user ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Register</button>
		</div>
		<p>
			Not yet a member? <a href="create_user.php">Sign up</a>
		</p>
	</form>


</body>
</html>