<?php

function load_header() {
    global $pdo;
    include(ABSPATH.'admin/build/header.php');
}

function load_footer() {
    include(ABSPATH.'admin/build/footer.php');
}

function load_meta() {
    $website_name = "HackathonDenBosch";
    $webpath = $_SERVER["SERVER_NAME"]."/$website_name/";
    ?>
    <link href="content/public/assets/css/style.css" type="text/css" rel=stylesheet>
    <link href="content/public/assets/css/responsive.css" type="text/css" rel=stylesheet>
    <link href="content/public/assets/fonts/fontmanager.css" type="text/css" rel=stylesheet>
<link href="content/public/external/font-awesome/css/font-awesome.css" type="text/css" rel=stylesheet>
    <script src="content/public/assets/js/loginmenu.js" defer="defer"></script>
    <?php
}