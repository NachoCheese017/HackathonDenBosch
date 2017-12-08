<?php
if(isset($_GET['productid']))
{
	$sth = selectDatabase($pdo, 'PRODUCTS', 'product_ID', $_GET['productid'], '');
	if($row = $sth->fetch())
	{
		echo 'product_ID: '.$row['product_ID'];
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