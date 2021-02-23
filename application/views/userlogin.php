<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style>
		fieldset{
			width:300px;
			height: 300px;
		}

	</style>
</head>
<body>

	<form action="<?php echo base_url()?>main/login_fn" method="post">
		<center>
			<fieldset>
				<h1>Login</h1>
				<input type="text" name="uname" placeholder="user name"><br><br>
				<input type="password" name="pass" placeholder="password"><br><br>
				<input type="submit" name="submit" value="Login">
			</fieldset>
		</center>
	</form>

</body>
</html>