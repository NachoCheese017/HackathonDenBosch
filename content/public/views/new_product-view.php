<div class="page_wrapper">
    <div class="registerfield">
        <div class="register-msg">
            Nieuw product
        </div>
        <form action="" method="post">
            <ul class="formlist">
                <li class="reg_input">
                    <div class="input-label">
                        <label for="p_type">Type</label>
                    </div>
                    <input type="text" name="p_type" placeholder="Product soort" required>
                </li>
                <li class="reg_input">
                    <div class="input-label">
                        <label for="p_brand">Merk</label>
                    </div>
                    <input type="text" name="p_brand" placeholder="Bedrijfsnaam">
                </li>
                <li class="reg_input">
                    <div class="input-label">
                        <label for="p_name">Naam</label>
                    </div>
                    <input type="text" name="p_name" placeholder="Product naam" required>
                </li>
                <li id="newlabels">
                    <div onclick="createNewQst()" class="button3">
                        Add label + description
	                </div>
	                <div id="user_input_qst"></div>
                </li>
                <li class="reg_submit">
                    <input type="submit" name="save_new_product" value="Opslaan" class="button1">
                </li>
            </ul>
        </form>
    </div>
</div>

<script>
var count = 1;
function createNewQst(){
	document.getElementById('user_input_qst').innerHTML += '<br/><input type="text" name="p_label_'+count+'" placeholder="label"><input type="text" name="p_description_'+count+'" placeholder="description">';
	count++;
}
</script>