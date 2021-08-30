<?php
    include("./config/db.php");
    session_start();
     header('location:'.SITEURL.'./admin/login.php');
    unset($_SESSION['is_login']);
        
        
    
?>