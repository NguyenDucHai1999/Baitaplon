<?php

include('./config/db.php');

if(!isset($_SESSION['is_login'])){
    header('location:'.SITEURL.'./admin/login.php');
}
?>