<div class="page_wrapper">
    <div class="home-banner">
        <div class="button-left">
            <div class="button-market button2">
                <a href="market">Markt</a>
            </div>
        </div>
        <div class="button-right">
            <?php if(!loginCheck($pdo)) { ?>
            <div class="button-register button2">
                <a href="register">Aanmelden</a>
            </div>
            <?php } else { ?>
            <div class="button-userprofile button2">
                <a href="profiel">Mijn profiel</a>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="company">
        <div class="company-name">
            SCHRIJVERS
        </div>
    </div>
</div>