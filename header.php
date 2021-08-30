<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
   <title></title>
   <base href ="http://localhost/codelearn/" />
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="generator" content="Vtechcom! - Open Source Content Management" />
   <meta name="author" content="Your Vtechcom Team">
   <!-- STYLE -->
   <!-- Font awesome styles -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   <!-- Bootstrap styles -->
   <link rel="stylesheet" href="assets/libs/bs/bootstrap.min.css" />
   <link rel="stylesheet" href="assets/libs/OwlCarousel/owl.carousel.min.css" />
   <!-- Base style -->
   <link rel="stylesheet" href="assets/css/styles.css" />
   <link rel="stylesheet" href="assets/css/common.css" />
   <link rel="stylesheet" href="assets/css/responsive.css" />
   <!-- Website styles -->

</head>

<body>
   <!-- Đây là HEADER -->
   <header>
      <!-- HEADER DESKTOP -->
      <header id="header">
         <!-- navbar -->
         <nav id="navbar" class=" navbar-default">
            <section class="container">
               <div class="flex-container flex-row navbar-wrap align-items-center">
                  <!-- logo -->
                  <div class="brand">
                     <a href="./index.php"><img src="assets/img/logo.png" alt=""></a>
                  </div>
                  <!-- / logo -->
                  <!-- menu desktop-->
                  <div class="menu d-flex">
                     <ul class="nav">
                        <li><a href='./learning.php' class="active">Learning</a></li>
                        <li><a href='/'>Training</a></li>
                        <li><a href='/'>Fights</a></li>
                        <li><a href='/'>Challange</a></li>
                        <li><a href='/'>Evaluating</a></li>
                        <li><a href='/'>Disscusion</a></li>
                        <li><a href='/'>Game</a></li>
                     </ul>
                  </div>
                  <?php 
                  // $_SESSION['is_login_frontend'] = 1;
                  
                  if(!isset($_SESSION['is_login_frontend'])){ ?>
                  <div class="login d-flex">
                     <a href="./dangnhap.php">Login</a>
                     <a href="./dangky.php" class="re">Register</a>
                  </div>
                  <?php } else {?>
                     <div class="login d-flex">
                        <a href="./logout.php" class="re">Logout</a>
                     </div>
                  <?php } ?>
               </div>
            </section>
         </nav>
</br>