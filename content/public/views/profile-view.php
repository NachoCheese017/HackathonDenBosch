<div class="page_rapper">
	<div id="content_div">
		<div class="content_class" style="border-top-left-radius: 10px;border-top-right-radius: 10px;">
			Email:
			<?php echo $row['u_mail']; ?>
		</div>
		<div class="content_class">
			Voornaam:
			<?php echo $row['u_firstname']; ?>
		</div>
		<div class="content_class">
			Achternaam:
			<?php echo $row['u_lastname']; ?>
		</div>
		<a href="change" class="href">
			&nbsp;&nbsp;Bewerk profiel
		</a>
		<a href="logout" class="href" style="position: absolute;right: 0;">
			Log uit&nbsp;&nbsp;
		</a>
		<div style="position: absolute;left: 45%;font-size: 20px;">
			Uw producten:
		</div>
		<div style="position: relative;top: 50px;left: 10px;font-size: 18px;">
			&nbsp;Type product&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Merk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Gebruik<br/><br/>
			Zonne paneel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			JA-SOLAR 300WP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			3330 kWh per jaar
			<a href="delete" style="position: absolute;right: 20px;">Verwijder</a>
			<a href="market" style="position: absolute;right: 120px;">Bekijk</a>
		</div>
	</div>
</div>
<style>
#content_div{
	background-color: #E3E3E3;
	position: absolute;
	width: 80%;
	height: 600px;
	left: 10%;
	top: 80px;
	border: 2px solid #D1D1D1;
	border-radius: 10px;
}

.content_class{
	background-color: #F0F0F0;
	position: relative;
	width: 100%;
	font-size: 26px;
	text-align: center;
	border-bottom: 2px solid #CFCFCF;
}

.href{
	font-size: 22px;
}
</style>