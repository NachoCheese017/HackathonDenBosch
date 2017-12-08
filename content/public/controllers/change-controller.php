<?php
if(loginCheck($pdo))
{
	$sth = selectDatabase($pdo, 'USERS', 'user_ID', $_SESSION['accID'], '');
	$row = $sth->fetch();
	if(isset($_POST['change_acc']))
	{
		// Auxiliary variable
		$firstnameErr = $lastnameErr = false;
		$errCheck = false;

		// Check email
		if(empty($_POST['user_register_firstname']))
		{
			$firstnameErr = 'Your first name cannot be empty.';
			$errCheck = true;
		}

		if(empty($_POST['user_register_lastname']))
		{
			$lastnameErr = 'Your last name cannot be empty.';
			$errCheck = true;
		}

		if(!$errCheck)
		{
			// Save changed user
			$arrayValues['u_fisrtname'] = $_POST['user_register_firstname'];
			$arrayValues['u_lastname'] = $_POST['user_register_lastname'];
			$sth = updateDatabase($pdo, 'USERS', 'user_ID', $_SESSION['accID'], $arrayValues);
			echo '<script>window.location.href = "home";</script>';
		}
		else
		{
			include(ABSPATH.'content/public/views/register-view.php');
		}
	}
	else
	{
		include(ABSPATH.'content/public/views/register-view.php');
	}
}
else
{
	echo '<script>window.location.href = "home";</script>';
}