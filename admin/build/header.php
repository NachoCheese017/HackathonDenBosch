<div class="header">
    <div class="header-left">
        <div class="header-logo">
            <div>
                <a class="header-homelink" href="home">
                    <img src="content/public/assets/images/logo.png">
                </a>
            </div>
        </div>
    </div>
    <div class="header-center">
    </div>
    <div class="header-right">
        <div class="header-user">
            <?php if(!loginCheck($pdo)) { ?>
            <div class="header-login">
                <p id="logintoggle">Inloggen</p>
            </div>
            <div class="header-register">
                <a href="register">Registreren</a>
            </div>
            <form action="home" method="post">
                <div class="header-form-login" id="login">
                    <div class="user-name">
                        <input type="text" name="user_login_name" placeholder="Email">
                    </div>
                    <div class="user-pass">
                        <input type="password" name="user_login_pass" placeholder="Wachtwoord">
                    </div>
                    <div class="user-login-btm">
                        <div class="user-submit">
                            <input class="button1" type="submit" name="user_login_submit" value="Inloggen">
                        </div>
                        <div class="user-forgot">
                            <a href="home">Vergeten??</a>
                        </div>
                    </div>
                </div>
            </form>
            <?php } else { ?>
            <div class="header-welcome">
                <a href="profiel"><p>Hallo Stijn</p></a>
            </div>
            <div class="header-logout">
                <a href="logout">Uitloggen</a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>