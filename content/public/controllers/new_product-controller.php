<?php
if(loginCheck($pdo))
{
	if(isset($_POST['save_new_product']))
	{
		$sth = selectDatabase($pdo, 'PRODUCTS', '', '', '');
		$ID = 0;
		while($row = $sth->fetch())
		{
			$ID = $row['product_ID'];
		}
		$ID++;
		$arrayValues['product_ID'] = $ID;
		$arrayValues['user_ID'] = $_SESSION['accID'];
		$arrayValues['p_type'] = $_POST['p_type'];
		$arrayValues['p_brand'] = $_POST['p_brand'];
		$arrayValues['p_name'] = $_POST['p_name'];
		$arrayValues['insert_date'] = date("Y-m-d H:i:s");
		$sth = insertDatabase($pdo, 'PRODUCTS', $arrayValues);
		$count = 1;
		$sth = selectDatabase($pdo, 'PRODUCT_SPECIFICATIONS', '', '', '');
		$ID2 = 0;
		while($row = $sth->fetch())
		{
			$ID2 = $row['specification_ID'];
		}
		$ID2++;
		$arrayValues = array();
		while(isset($_POST['p_label_'.$count]))
		{
			if(!empty($_POST['p_label_'.$count]) AND !empty($_POST['p_description_'.$count]))
			{
				$arrayValues['product_ID'] = $ID;
				$arrayValues['specification_ID'] = $ID2;
				$arrayValues['s_label'] = $_POST['p_label_'.$count];
				$arrayValues['s_content'] = $_POST['p_description_'.$count];
				$sth = insertDatabase($pdo, 'PRODUCT_SPECIFICATIONS', $arrayValues);
				echo '<script>alert('.$ID2.');</script>';
				$ID2++;
			}
			$count++;
		}
		include(ABSPATH.'content/public/views/new_product-view.php');
		echo '<div id="insert_success">Your new product has been created.</div>';
	}
	else
	{
		include(ABSPATH.'content/public/views/new_product-view.php');
	}
}
else
{
	echo '<script>window.location.href = "home";</script>';
}