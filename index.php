<?php
    session_start();
    if( !isset($_SESSION['name'])) {
        $button = '<h3><a href="login.php">Log in</a></h3>';
    }else{
        $name = $_SESSION['name'];
        $button = '<h3><a href="logout.php">'.$name.' Log out</a></h3>';
    }
?>
<html>
    <head>
        <title>Index Page</title>
    </head>
    <body>
        <h1>U r in Index Page</h1>
        <br>
        <?php echo $button ?>
        
    </body>
</html>