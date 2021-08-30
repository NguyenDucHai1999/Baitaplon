<?php
    include("./admin/config/db.php");
    session_start();
     header('location:'.SITEURL.'index.php');
    unset($_SESSION['is_login_frontend']);
    unset($_SESSION['is_login_name']);
        
        
    
?>