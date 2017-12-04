<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <?php include_once(ABSPATH.'content/public/assets/assetmanager.php'); ?>
    </head>
    <body>
        <?php require(ABSPATH.$router->direct($uri)); ?>
    </body>
</html>