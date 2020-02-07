<?php
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
header( "Refresh:1; url= index.php");   ?>
<center>Payment Gateway!!</center>