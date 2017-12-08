<div class="page_wrapper" id="register">
    <div class="page_content">
        <div class="registerfield">
            <div class="register-msg">
                Maak hier uw account aan.
            </div>
            <form action="register" method="post">
                <ul class="formlist">
                    <li class="reg_input">
                        <div class="input-label">
                            <label for="user_register_email">E-mail</label>
                        </div>
                        <input type="text" name="user_register_email" required>
                    </li>
                    <li class="reg_input">
                        <div class="input-label">
                            <label for="user_register_email">Password</label>
                        </div>
                        <input type="text" name="user_register_pass" required>
                    </li>
                    <li class="reg_input">
                        <div class="input-label">
                            <label for="user_register_email">Voornaam</label>
                        </div>
                        <input type="text" name="user_register_firstname">
                    </li>
                    <li class="reg_input">
                        <div class="input-label">
                            <label for="user_register_email">Achternaam</label>
                        </div>
                        <input type="text" name="user_register_lastname">
                    </li>
                    <li class="reg_submit">
                        <input  class="button1" type="submit" name="register_acc" value="Register">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>





	<?php if(isset($_POST['register_acc'])){echo $emailErr;} ?>
	<?php if(isset($_POST['register_acc'])){echo $passErr;} ?>
	
	
