<form action="register-controller.php" method="post">
	<input type="text" name="user_register_email" placeholder="Email"><?php echo $emailErr;?><br/>
	<input type="text" name="user_register_pass" placeholder="Password"><?php echo $passErr;?><br/>
	<input type="text" name="user_register_firstname" placeholder="Password"><br/>
	<input type="text" name="user_register_lastname" placeholder="Password"><br/>
	<input type="submit" name="register_acc" value="Register">
</form>