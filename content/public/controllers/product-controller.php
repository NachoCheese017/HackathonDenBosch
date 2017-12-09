<?php
if(isset($_GET['productid']))
{
	$sth = selectDatabase($pdo, 'PRODUCTS', 'product_ID', $_GET['productid'], '');
	if($row = $sth->fetch())
	{
		include(ABSPATH.'content/public/views/product-view.php');
	}
	else
	{
		echo 'This product could not be found.';
	}
}
else
{
	echo '<script>window.location.href = "home";</script>';
}