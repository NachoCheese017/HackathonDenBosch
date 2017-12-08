<?php
if(isset($_GET['productID']))
{
	echo '<script>alert('.$_GET['productID'].');</script>';
	// $sth = selectDatabase($pdo, 'MARKET_OFFERS', 'product_ID', $_GET['productID'], '');
	// if($row = $sth->fetch())
	// {
	// 	echo 'market_product_ID: '.$row['product_ID'];
	// }
	// else
	// {
	// 	echo 'This product could not be found.';
	// }
}
else
{
	echo '<script>alert();</script>';
}