<?php
if(loginCheck($pdo))
{
	$sth = selectDatabase($pdo, 'USERS', 'user_ID', $_SESSION['accID'], '');
	$row = $sth->fetch();
	include(ABSPATH.'content/public/views/profile-view.php');
}
else
{
	echo 'U bent nog niet ingelogd.<br/><i>Klik rechtsboven op Inloggen om in te loggen.</i>';
}