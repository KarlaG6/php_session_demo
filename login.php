<?php
if( isset($_POST['user_name'])) {
    session_start();
    $_SESSION['name']=$_POST['user_name'];
    //storing the username in SESSION variable
    header("Location: profile.php");
}
?>
<html>
    <head>
        <title>Session Handling in PHP</title>
    </head>
    <body>
        <form action="" method="post" id="login_form">
            <input type="text" name="user_name" id="userField">
            <br>
            <input type="submit" value="Log in">
        </form>
    </body>
</html>