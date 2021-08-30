<?php
include('./template/header.php');
include('./config/db.php');
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
                    <a href="index.php">
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

                            <a href="quanlyadmin.php" class="active">
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
                                <a href="#">Logout</a>
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
                    <a href="">Thêm mới</a>
                </div>
            </div>
            <div class="main-content">
                
                <div class="tkadmin">
                    <div class="row">

                        <div class="col-md-6">
                            <h3>Sửa thông tin quản trị</h3>
                            <?php
                            //Connect
                            $conn = mysqli_connect('localhost', 'root', '', 'codelearn');
                            // Lấy id từ admin được click
                            $id = $_GET['id'];

                            //SQL để lấy thông tin 
                            $sql = "select * from tbl_admin where id=$id";
                            //Thuc thi truy van
                            $result = mysqli_query($conn, $sql);
                            if ($result == true) {
                                $count = mysqli_num_rows($result);
                                if ($count == 1) {
                                    $row = mysqli_fetch_assoc($result);
                                    $user_name = $row['user_name'];
                                    $email = $row['email'];
                                    $password = $row['password'];
                                }
                            }
                            ?>

                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Họ và tên</p>
                                    </div>
                                    <div class="col-md-9">
                                        <input name="user_name" type="text" value="<?php echo $user_name; ?>">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <p>Email:</p>
                                    </div>
                                    <div class="col-md-9">
                                        <input name="email" type="text" value="<?php echo $email; ?>">
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <p>Mật khẩu</p>
                                    </div>
                                    <div class="col-md-9">
                                        <input name="password" type="password" value="<?php echo $password; ?>">
                                    </div>
                                </div>
                                <div class="bnt-tt">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <button name="submitedit" type="submit">Thay đổi</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <div class="right-img">
                                <div class="insert-img">
                                    <button name="sbm_contact" type="submit"> <i class="bi bi-image-fill"></i> <br> Sửa ảnh mô tả </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </main>
    <?php
    if (isset($_POST['submitedit'])) {
        //Laasy data tu form de update
        $id = $_POST['id'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //SQL
        $sql = "UPDATE tbl_admin SET user_name ='$user_name' , email = '$email', password ='$password' where id = '$id'";

        //Thuc thi
        // $conn = mysqli_connect('localhost','root','','codelearn');
        $result = mysqli_query($conn, $sql);
        // if($result>0)
        // {
        // header('location:'.SITEURL.'./quanlyadmin.php');
        // }

    }
    ?>
    <?php
    include('./template/footer.php');
    ?>