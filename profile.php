<?php
    session_start();
    if( !isset($_SESSION['name'])) {
        header("Location: index.php");
    }
    $name = $_SESSION['name'];
?>
<html>
    <head>
        <title>Profile of <?php $name; ?></title>
    </head>
    <body>
        <h1>Hello <?php echo $name; ?></h1>
        <h3><a href="logout.php">Log out</a></h3>
        <h3><a href="index.php">Go to index</a></h3>
    </body>
</html>