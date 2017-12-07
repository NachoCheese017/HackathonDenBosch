<!DOCTYPE html>
<html>
    <head>
        <!--INCLUDE META VIA FUNCTION-->
        <title></title>
        <?php include_once(ABSPATH.'content/public/assets/assetmanager.php'); ?>
    </head>
    <body>
        <?php require(ABSPATH.$router->direct($uri)); ?>
    </body>
</html>