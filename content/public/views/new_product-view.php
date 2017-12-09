<form action="" method="post">
	Type : <input type="text" name="p_type" placeholder="Product soort" required><br/>
	Merk : <input type="text" name="p_brand" placeholder="Bedrijfsnaam"><br/>
	Naam : <input type="text" name="p_name" placeholder="Product naam" required><br/>
	<div onclick="createNewQst()">
		Add label + description
	</div>
	<div id="user_input_qst"></div>
	<input type="submit" name="save_new_product" value="Save">
</form>
<script>
var count = 1;
function createNewQst(){
	document.getElementById('user_input_qst').innerHTML += '<br/><input type="text" name="p_label_'+count+'" placeholder="label"><input type="text" name="p_description_'+count+'" placeholder="description">';
	count++;
}
</script>