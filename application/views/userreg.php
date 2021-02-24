<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<style>
		fieldset{
			width:500px;
			height:300px;
		}
	</style>
</head>
<body>
 <form action="<?php echo base_url()?>main/value_insert" method="post">
 	<center><fieldset>


  <input type="text" name="fname" placeholder="First name" pattern=".{3,}" required title="3 charecters minimum" maxlength="25"><br><br>

  <input type="text" name="lname" placeholder="Last name" pattern=".{3,}"   required title="3 characters minimum"  maxlength="25"><br><br>

  <input type="text" name="uname" placeholder="User name" pattern=".{3,}"   required title="3 characters minimum" maxlength="10"><br><br>

  <input type="password" name="pass" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"><br><br>

  <input type="text" name="mob" placeholder="Mobile number" required minlength="10"maxlength="10"><br><br>

  
  <input type="email" name="email" placeholder="Email"><br><br>

  <input type="submit" name="submit" value="submit">
  



</fieldset></center>
</form>

</body>
</html>
