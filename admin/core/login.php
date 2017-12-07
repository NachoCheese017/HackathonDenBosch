<?php
// Log user in
function login($Email, $Password, $pdo)
{
	$sth = selectDatabase($pdo, 'users', 'Email', $Email, NULL);

	// Check for users
	if($row = $sth->fetch())
	{
		// Create password
		$Password = hash('sha512', $Password.$row['Salt']);

		// Check if created password matches database string
		if($row['Password'] == $Password)
		{
			$_SESSION['accID'] = $row['ID'];
			$_SESSION['accEmail'] = $row['Email'];
			$_SESSION['accLevel'] = $row['Level'];
			$_SESSION['accString'] = hash('sha512', $Password.$_SERVER['HTTP_USER_AGENT']);

			// Login successful
			return true;
		}
		else
		{
			// Password incorrect
			return false;
		}
	}
	else
	{
		// Username unexistent
		return false;
	}
}