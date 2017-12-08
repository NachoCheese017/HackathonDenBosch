<!DOCTYPE html>
<html>
    <head>
        <!--INCLUDE META VIA FUNCTION-->
        <title></title>
        <?php load_meta(); ?>
    </head>
    <body>
        <header>
            <?php load_header(); ?>
        </header>
        <main class="<?= $uri ?>">
            <?php require(ABSPATH.$router->direct($uri)); ?>
        </main>
        <footer>
            <?php load_footer(); ?>
        </footer>
    </body>
</html>