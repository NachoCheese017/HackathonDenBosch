<div class="page_wrapper">
    <div class="home-banner">
        <div class="button-market button2">
            <a href="market">Markt</a>
        </div>
        <?php if(!loginCheck($pdo)) { ?>
        <div class="button-register button2">
            <a href="register">Aanmelden</a>
        </div>
        <?php } else { ?>
        <div class="button-userprofile button2">
            <a href="userprofile">Mijn profiel</a>
        </div>
        <?php } ?>
    </div>
</div>