<?php
    include 'inc/db_config.php';
    include 'inc/db_mountains.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("inc/head.php"); ?>
    </head>
    <body>
        <?php include("inc/nav.php"); ?>
        <?php include("inc/jumbotron.php"); ?>
    
        <div class="album text-muted">
            <div class="container">
                <?php include("inc/album.php"); ?>
            </div>
        </div>
    
        <?php include("inc/scripts.php"); ?>
    </body>
</html>