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
<<<<<<< HEAD

  <input type="text" name="fname" placeholder="First name" pattern=".{3,}" required title="3 charecters minimum" maxlength="25"><br><br>

  <input type="text" name="lname" placeholder="Last name" pattern=".{3,}"   required title="3 characters minimum"  maxlength="25"><br><br>

  <input type="text" name="uname" placeholder="User name" pattern=".{3,}"   required title="3 characters minimum" maxlength="10"><br><br>

  <input type="password" name="pass" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"><br><br>

  <input type="text" name="mob" placeholder="Mobile number" required minlength="10"maxlength="10"><br><br>

  <input type="email" name="email" placeholder="Email" required><br><br>
=======
  <input type="text" name="fname" placeholder="First name"><br><br>
  <input type="text" name="lname" placeholder="Last name"><br><br>
  <input type="text" name="uname" placeholder="User name"><br><br>
  <input type="password" name="pass" placeholder="password"><br><br>
  <input type="text" name="mob" placeholder="Mobile number"><br><br>
  <input type="email" name="email" placeholder="Email"><br><br>
>>>>>>> a866c6796bb83ead50839027347ec5dd73d4ad12
  <input type="submit" name="submit" value="submit">
  



</fieldset></center>
</form>

</body>
</html>>
