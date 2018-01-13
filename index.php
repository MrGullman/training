<?php
    if(isset($_SESSION['userLoggedIn'])){
        header("Location: userpage.php");
    }else{
        header("Location: register.php");
    }
?>
