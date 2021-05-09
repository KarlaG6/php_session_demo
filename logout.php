<?php
    session_start();
    if( isset($_SESSION['name'])) {
        unset($_SESSION['name']);
        session_destroy();
    }
    echo '<h1>You have been successfully logout</h1> <br> <h3><a href="index.php">Go to index</a></h3>';
?>