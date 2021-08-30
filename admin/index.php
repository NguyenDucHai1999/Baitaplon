<?php
include('./template/header.php');
require_once './check_login.php';
?>


<body>
    <!-- SIDEBAR -->
     <main>
        <div class="sidebar">     
            <div class="admninpanel">
                <h2>Admin panel</h2>
            </div>  
            <div class="sidebar-user">
                <div class="sidebar-user-info">
                    <img src="assets/img/admin-img/z2.jpg" alt="User picture" class="profile-image">
                    <div class="sidebar-user-name">
                        CODELEARN
                    </div>
                </div>
                
            </div>
            <!-- SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li>
                    <a href="index.php" class="active">
                        <i class="bi bi-speedometer2"></i>
                        <span>dashboard</span>
                    </a>
                </li>
                <li class="sidebar-submenu">
                    <a href="#" class="sidebar-menu-dropdown">
                        <i class="bi bi-person-fill"></i>
                        <span>Quản lý người dùng</span>
                        <div class="dropdown-icon"></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="quanlyhocvien.php">
                               <i class="bi bi-person-lines-fill"></i>
                               Quản lý học viên
                            </a>
                        </li>
                        <li>
                            
                            <a href="quanlyadmin.php" >
                                <i class="bi bi-person-fill"></i>
                                Quản lý admin
                            </a>
                        </li>                  
                    </ul>
                </li>
                <li>
                    <a href="quanlykhoahoc.php">
                        <i class="bi bi-book-fill"></i>
                        <span>Quản lý khóa học</span>
                    </a>
                </li>            
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    
        <!-- MAIN CONTENT -->
        <div class="main">
            <div class="header-main">
                <div class="sidebar-user-info img-cre">
                    <!-- <img src="assets/img/admin-img/z2.jpg" alt="User picture" class="profile-image"> -->
                    <div class="sidebar-user-name text-white">
                        
                    </div>
                    <div class="dot">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="bi bi-three-dots"></i></button>
                                    <div id="myDropdown" class="dropdown-content">
                                      <a href="./logout.php">Logout</a>
                                    </div>
                                  </div> 
                            </div>
                </div>
            </div>
            <div class="main-header">
                <div class="mobile-toggle" id="mobile-toggle">
                    <i class='bx bx-menu-alt-right'></i>
                </div>
                <div class="main-title">
                    <h2>Quản lý Admin</h2>
                    <p>Quản trị viên</p>
                </div>    
                <div class="right">
                    <button class="btn btn-outline">
                        <i class='bx bx-log-out bx-flip-horizontal'></i>
                        <span>Đăng Xuất</span>
                    </button> 
                </div>  
            </div>
            <div class="main-content">
                <div class="row">
                    <?php
                    $conn = mysqli_connect('localhost','root','','codelearn');
                    $sql = $sql = "SELECT * FROM tbl_course";
                    $result =mysqli_query($conn,$sql);
                    $rows = mysqli_num_rows($result);
                    ?>
                    <div class="col-md-4">
                        <div class="box box-hover">
                            <!-- COUNTER -->
                           <div class="content">
                                <h2><?php echo $rows; ?></h2>
                                <p>Khóa học</p>
                           </div>
                            <!-- END COUNTER -->
                        </div>
                    </div> 
                    <?php                   
                    ?>
                    <?php
                    $conn = mysqli_connect('localhost','root','','codelearn');
                    $sql = $sql = "SELECT * FROM tbl_admin";
                    $result =mysqli_query($conn,$sql);
                    $rows = mysqli_num_rows($result);
                    ?>
                    <div class="col-md-4">
                        <div class="box box-hover">
                            <!-- COUNTER -->
                           <div class="content">
                                <h2><?php echo $rows;?></h2>
                                <p>Quản trị viên</p>
                           </div>
                            <!-- END COUNTER -->
                        </div>
                    </div>
                    <?php
                    ?>
                    <?php
                    $conn = mysqli_connect('localhost','root','','codelearn');
                    $sql = $sql = "SELECT * FROM tbl_user";
                    $result =mysqli_query($conn,$sql);
                    $rows = mysqli_num_rows($result);
                    ?>
                    <div class="col-md-4">
                        <div class="box box-hover">
                            <!-- COUNTER -->
                           <div class="content">
                                <h2><?php echo $rows;?></h2>
                                <p>Học viên</p>
                           </div>
                            <!-- END COUNTER -->
                        </div>
                    </div>
                    <?php
                    ?>                           
                </div>
    
               
            </div>
        </div>
        <!-- END MAIN CONTENT -->
     </main>
<?php
include('./template/footer.php')
?>