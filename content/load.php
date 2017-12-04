<!DOCTYPE html>
<html>
    <head>
        <!--INCLUDE META-->
        <title></title>
        <?php include_once(ABSPATH.'content/public/assets/assetmanager.php'); ?>
    </head>
    <body>
        <!--REDIRECT NAAR EXTRA FILE MET PAGINATION EN VARIABLE SETTINGS-->
        <?php require(ABSPATH.$router->direct($uri)); ?>
    </body>
</html>