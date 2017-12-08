<?php
// Search
if(isset($_POST['product_search_submit']))
{
	$search = $_POST['product_search_input'];
	$addon = 'WHERE p_type LIKE %'.$search.'% OR p_brand LIKE %'.$search.'% OR p_name LIKE %'.$search.'%';
}
else
{
	$addon = '';
}

// Page nav
if(isset($_POST['navBtn1']))
{
	$_SESSION['pageNmb'] = $_POST['navBtn1'];
	echo '<script>window.location.href = "market-controller";</script>';
}
elseif(isset($_POST['navBtn2']))
{
	$_SESSION['pageNmb'] = $_POST['navBtn2'];
	echo '<script>window.location.href = "market-controller";</script>';
}
elseif(isset($_POST['navBtn3']))
{
	$_SESSION['pageNmb'] = $_POST['navBtn3'];
	echo '<script>window.location.href = "market-controller";</script>';
}
elseif(isset($_POST['next']))
{
	$_SESSION['pageNmb'] = $_SESSION['pageNmb'] + 1;
	echo '<script>window.location.href = "market-controller";</script>';
}
elseif(isset($_POST['prev']))
{
	$_SESSION['pageNmb'] = $_SESSION['pageNmb'] - 1;
	echo '<script>window.location.href = "market-controller";</script>';
}
elseif(isset($_POST['end']))
{
	$_SESSION['pageNmb'] = $totalPages;
	echo '<script>window.location.href = "market-controller";</script>';
}
elseif(isset($_POST['beg']))
{
	$_SESSION['pageNmb'] = 1;
	echo '<script>window.location.href = "market-controller";</script>';
}
elseif(isset($_POST['changePageNmb']))
{
	$_SESSION['pageNmb'] = $_POST['changePageNmb'];
	echo '<script>window.location.href = "market-controller";</script>';
}
if(isset($_POST['changeTotalPagesBtn']))
{
	$_SESSION['totalPages'] = $_POST['changeTotalPages'];
}

if(empty($_SESSION['pageNmb']))
{
	$_SESSION['pageNmb'] = 1;
}
if(empty($_SESSION['totalPages']))
{
	$_SESSION['totalPages'] = 30;
}

$sth = $pdo->prepare('SELECT COUNT(*) FROM template');
$sth->execute();
$totalPages = $sth->fetchColumn();
$totalPages = ceil($totalPages / 20);

function productDisplay($pdo)
{
	if($_SESSION['pageNmb'] != 1)
	{
		$multNumb = $_SESSION['pageNmb'] - 1;
		$totalRows = $multNumb * $_SESSION['totalPages'];
		$limitRows = ' LIMIT '.$_SESSION['totalPages'].' OFFSET '.$totalRows;
	}
	else
	{
		$limitRows = ' LIMIT '.$_SESSION['totalPages'];
	}
	$sth = selectDatabase($pdo, 'PRODUCTS', '', '', $addon.$limitRows);
	while($row = $sth->fetch())
	{
		marketProduct($row);
	}
}

function pageNav($totalPages){
	?>
	<div id="pageNavigator">
		<?php
		if($totalPages > 0)
		{
			// Page navigator
			echo '<form action="" method="post" autocomplete="off">';
			if($_SESSION['pageNmb'] > 1)
			{
				?>
				<input type="submit" name="prev" value="&lt;" class="pageNavBtn" style="left: 30px;border-left: 1px solid #CCCCCC;border-right: 0px;">
				<?php
			}
			if($_SESSION['pageNmb'] < $totalPages)
			{
				?>
				<input type="submit" name="next" value="&gt;" class="pageNavBtn" style="left: 129px;border-left: 0px;border-right: 1px solid #CCCCCC;">
				<?php
			}
			if($totalPages != 1)
			{
				?>
				<input type="submit" name="navBtn1" value="<?php if($_SESSION['pageNmb'] > 1 AND $_SESSION['pageNmb'] < $totalPages){echo $_SESSION['pageNmb'] - 1;}elseif($_SESSION['pageNmb'] == $totalPages AND $totalPages != 2){echo $_SESSION['pageNmb'] - 2;}else{echo 1;} ?>" id="navBtn1">
				<?php
			}
			if($totalPages > 1)
			{
				?>
				<input type="submit" name="navBtn2" value="<?php if($_SESSION['pageNmb'] > 1 AND $_SESSION['pageNmb'] < $totalPages){echo $_SESSION['pageNmb'];}elseif($_SESSION['pageNmb'] == $totalPages AND $totalPages != 2){echo $_SESSION['pageNmb'] - 1;}else{echo 2;} ?>" id="navBtn2">
				<?php
				if($totalPages > 2)
				{
					?>
					<input type="submit" name="navBtn3" value="<?php if($_SESSION['pageNmb'] == 1){echo 3;}elseif($_SESSION['pageNmb'] == $totalPages){echo $totalPages;}else{echo $_SESSION['pageNmb'] + 1;} ?>" id="navBtn3">
					<?php
				}
				if($_SESSION['pageNmb'] > 1)
				{
					?>
					<input type="submit" name="beg" value="&Lt;" class="pageNavBtn" style="left: 0;border-left: 1px solid #CCCCCC;border-right: 0px;">
					<?php
				}
				if($_SESSION['pageNmb'] < $totalPages)
				{
					?>
					<input type="submit" name="end" value="&Gt;" class="pageNavBtn" style="left: 159px;border-left: 0px;border-right: 1px solid #CCCCCC;">
					<?php
				}
			}
			if($_SESSION['pageNmb'] == 1)
			{
				if($totalPages != 1)
				{
					echo '<style>#navBtn1{background-color: #A7A8B0;}</style>';
				}
			}
			else
			{
				if($_SESSION['pageNmb'] == $totalPages)
				{
					if($totalPages > 2)
					{
						echo '<style>#navBtn3{background-color: #A7A8B0;}</style>';
					}
					else
					{
						echo '<style>#navBtn2{background-color: #A7A8B0;}</style>';
					}
				}
				else
				{
					echo '<style>#navBtn2{background-color: #A7A8B0;}</style>';
				}
			}
			?>
			</form>
			<?php
		}
		?>
	</div>
	<?php
}

include(ABSPATH.'content/public/views/market-view.php');