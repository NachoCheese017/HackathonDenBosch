<form action="change" method="post">
	<input type="text" name="user_register_firstname" value="<?php if(isset($_POST['change_acc'])){echo $_POST['user_register_firstname'];}else{echo $row['u_firstname'];} ?>"><br/>
	<input type="text" name="user_register_lastname" value="<?php if(isset($_POST['change_acc'])){echo $_POST['user_register_lastname'];}else{echo $row['u_lastname'];} ?>"><br/>
	<input type="submit" name="change_acc" value="Save">
</form>