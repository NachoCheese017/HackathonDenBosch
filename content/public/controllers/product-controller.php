<?php
if(isset($_GET['productid']))
{
	$sth = selectDatabase($pdo, 'MARKET_OFFERS', 'product_ID', $_GET['productid'], '');
	if($row = $sth->fetch())
	{
		echo 'market_product_ID: '.$row['product_id'];
	}
	else
	{
		echo 'This product could not be found.';
	}
}
else
{
	echo '<script>window.location.href = "'.ABSPATH.'";</script>';
}