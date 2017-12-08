<?php
if(loginCheck($pdo))
{
	if(isset($_POST['new_product_submit']))
	{
		
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