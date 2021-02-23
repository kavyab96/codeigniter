<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style>
		fieldset{
			width:500px;
			height:300px;
		}
	</style>
</head>
<body>
 <form action="<?php echo base_url()?>main/admin_insert" method="post">
 	<center><fieldset>
  <input type="text" name="fname" placeholder="First name"><br><br>
  <input type="text" name="lname" placeholder="Last name"><br><br>
  <input type="text" name="uname" placeholder="User name"><br><br>
  <input type="password" name="pass" placeholder="password"><br><br>
  <input type="text" name="mob" placeholder="Mobile number"><br><br>
  <input type="email" name="email" placeholder="Email"><br><br>
  <input type="submit" name="submit" value="submit">
  



</fieldset></center>
</form>

</body>
</html>>