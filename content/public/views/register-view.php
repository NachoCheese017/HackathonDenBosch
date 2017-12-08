<form action="register-controller.php" method="post">
	<input type="text" name="user_register_email" placeholder="Email" required><?php if(isset($_POST['register_acc'])){echo $emailErr;} ?><br/>
	<input type="text" name="user_register_pass" placeholder="Password" required><?php if(isset($_POST['register_acc'])){echo $passErr;} ?><br/>
	<input type="text" name="user_register_firstname" placeholder="First name"><br/>
	<input type="text" name="user_register_lastname" placeholder="Last name"><br/>
	<input type="submit" name="register_acc" value="Register">
</form>