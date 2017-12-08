<?php
if(!loginCheck($pdo))
{
	if(isset($_POST['register_acc']))
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
		$sth = selectDatabase($pdo, 'USERS', 'u_mail', $_POST['user_register_email'], '');
		if($sth->fetch())
		{
			$emailErr = 'This mail is already signed up. Please use another mail.';
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
			$sth = selectDatabase($pdo, 'USERS', '', '', '');
			$ID = 0;
			while($row = $sth->fetch())
			{
				$ID = $row['user_ID'];
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
			$arrayValues['setting_ID'] = $ID;
			$arrayValues['p_show_email'] = 0;
			$arrayValues['p_show_name'] = 0;
			$arrayValues['p_show_location'] = 0;
			$sth = insertDatabase($pdo, 'SETTINGS', $arrayValues);
			//make sestings

			$arrayValues = array();
			$arrayValues['user_ID'] = $ID;
			$arrayValues['house_ID'] = 0;
			$arrayValues['level_ID'] = 10;
			$arrayValues['setting_ID'] = 0;//id
			$sth = insertDatabase($pdo, 'ACCOUNTS', $arrayValues);
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
?>
