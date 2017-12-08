<?php
// Check if user is logged in
function loginCheck($pdo)
{
	// Check if session variables are filled
	if(isset($_SESSION['accID']) AND isset($_SESSION['accEmail']) AND isset($_SESSION['accString']))
	{
		// Retreive user info
		$sth = selectDatabase($pdo, 'users', 'ID', $_SESSION['accID'], '');
		if($row = $sth->fetch())
		{
			// Create password string
			$loginCheck = hash('sha512', $row['Password'].$_SERVER['HTTP_USER_AGENT']);

			// Check if created password string matches session
			if($loginCheck == $_SESSION['accString'])
			{
				// User is logged in
				return true;
			}
			else
			{
				// Session password string incorrect
				return false;
			}
		}
		else
		{
			// User unexistent
			return false;
		}
	}
}

// Log user in
if(!loginCheck($pdo))
{
	if(isset($_POST['user_login_submit']))
	{
		$Email = $_POST['user_login_name'];
		$Password = $_POST['user_login_pass'];

		// auxiliary variables
		$emailErr = $passErr = false;
		$errCheck = false;

		// Check mail
		if(empty($Email))
		{
			$emailErr = 'Your mail cannot be empty.';
			$errCheck = true;
		}

		// Check password
		if(empty($Password))
		{
			$passErr = 'Your password cannot be empty.';
			$errCheck = true;
		}

		if(!$errCheck)
		{
			$sth = selectDatabase($pdo, 'USERS', 'u_mail', $Email, '');

			// Check for users
			if($row = $sth->fetch())
			{
				// Create password
				$Password = hash('sha512', $Password.$row['u_salt']);

				// Check if created password matches database string
				if($row['u_password'] == $Password)
				{
					$_SESSION['accID'] = $row['user_ID'];
					$_SESSION['accEmail'] = $row['u_mail'];
					$sth = selectDatabase($pdo, 'ACCOUNTS', 'user_ID', $row['user_ID'], '');
					$row = $sth->fetch();
					$_SESSION['accLevel'] = $row['level_ID'];
					$_SESSION['accString'] = hash('sha512', $Password.$_SERVER['HTTP_USER_AGENT']);

					// Login successful
					echo '<script>location.reload();</script>';
				}
				else
				{
					// Password incorrect
					echo '<div id="login_fail">Failed to login.</div>';
				}
			}
			else
			{
				// Username unexistent
				echo '<div id="login_fail">Failed to login.</div>';
			}
		}
		else
		{
			// Username unexistent
			echo '<div id="login_fail">Failed to login.</div>';
		}
	}
}