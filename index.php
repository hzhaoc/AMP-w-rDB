<?php

session_start();
if (empty($_SESSION['email']) ){
    header("Location: login.php");
    die();
}else{
    header("Location: dog_dashboard.php");
    die();
}
?>