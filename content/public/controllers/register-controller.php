<?php
if(!loginCheck($pdo))
{
	// Auxiliary variables
	$emailErr = $passErr = false;
	$errCheck = false;

	// Check email
	if(empty($_POST['user_register_email']))
	{
		$emailErr = 'Your email cannot be empty.';
		$errCheck = true;
	}

	// Check password
	if(strlen($_POST['user_register_pass']) < 6 AND !empty($_POST['user_register_pass']))
	{
		$passErr = 'Your login password needs to be atleast 6 characters long.';
		$errCheck = true;
	}
	elseif(empty($_POST['user_register_pass']))
	{
		$passErr = 'You login password cannot be empty.';
		$errCheck = true;
	}

	if(!$errCheck)
	{
		// Retreive ID form database
		$sth = selectDatabase($pdo, 'USERS', '', '', 'ORDER BY user_ID DESC')
		$sth->execute();
		$ID = -1;
		if($row = $sth->fetch())
		{
			$ID = $row['ID'];
		}
		$ID++;

		// Create unique salt
		$salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

		// Has the password with the Salt
		$password = hash('sha512', $_POST['user_register_pass'].$salt);

		// Save user into USERS
		$arrayValues['user_ID'] = $ID;
		$arrayValues['u_mail'] = $_POST['user_register_email'];
		$arrayValues['u_password'] = $password;
		$arrayValues['u_salt'] = $salt;
		$arrayValues['u_firstname'] = $_POST['user_register_firstname'];
		$arrayValues['u_lastname'] = $_POST['user_register_lastname'];
		$sth = insertDatabase($pdo, 'USERS', $arrayValues);

		// Save user into ACCOUNTS
		$arrayValues['user_ID'] = $ID;
		$arrayValues['level_ID'] = 1;
		$sth = insertDatabase($pdo, 'ACCOUNTS', $arrayValues);
		echo '<script>window.location.href = "'.ABSPATH.'";</script>';
	}
}
else
{
	echo '<script>window.location.href = "'.ABSPATH.'";</script>';
}
?>