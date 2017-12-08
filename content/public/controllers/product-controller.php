<?php
if(isset($_GET['productid']))
{
	$sth = selectDatabase($pdo, 'PRODUCTS_CUSTOMER', 'product_ID', $_GET['productid'], '');
	if($row = $sth->fetch())
	{
		echo 'p_description: '.$row['p_description'];
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