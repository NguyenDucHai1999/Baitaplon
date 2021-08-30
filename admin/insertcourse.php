<?php
include('./template/header.php')
?>
<?php
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

                            <a href="quanlyadmin.php">
                                <i class="bi bi-person-fill"></i>
                                Quản lý admin
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="quanlykhoahoc.php" class="active">
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
                    <img src="assets/img/admin-img/z2.jpg" alt="User picture" class="profile-image">
                    <div class="sidebar-user-name text-white">
                        Haianhzz123
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
                    <h2>Quản lý khóa học</h2>
                    <p>Course</p>
                </div>
            </div>
            <div class="main-content">
                <div class="tkadmin">
                    <div class="row">

                        <div class="col-md-6">
                            <h3>Thêm khóa học mới</h3>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-4 w130">
                                        <p>Tên khóa học</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="course_name" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 w130">
                                        <p>Thời lượng</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="time" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 w130">
                                        <p>Số lượng</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="quantity_task" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 w130">
                                        <p>Chứng chỉ</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="certificate" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 w130">
                                        <p>Mô tả</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="description" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 w130">
                                        <p>Image</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="Image" type="text">
                                    </div>
                                </div>

                                <div>
                                    <button name="submit" type="submit">Thêm mới</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </main>

    <?php
    include('./template/footer.php')
    ?>
    <?php
    if (isset($_POST['submit'])){
        //Đã được click
        //Lấy data từ form
        $course_name = $_POST['course_name'];
        $time = $_POST['time'];
        $quantity_task = $_POST['quantity_task'];
        $certificate = $_POST['certificate'];
        $description = $_POST['description'];
        $Image = $_POST['Image'];
        //truy vấn
        $sql = " insert into tbl_course (course_name,time,quantity_task,certificate,description,Image)
        VALUES('$course_name',' $time','$quantity_task','$certificate','$description','$Image')";
        // Sang edit
        $conn = new mysqli("localhost", "root", "", "codelearn");
        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
        //         $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        // VALUES ('John', 'Doe', 'john@example.com')";
        
        if ($conn->query($sql) === TRUE) {
            $rs = "success";
        } else {
            die("Error: " . $sql . "<br>" . $conn->error);
        }
    
        $conn->close();
    // Thuc thi
    //$conn = mysqli_connect('localhost','root','');
    //$db_select = mysqli_select_db($conn,'codelearn');
    //$rs = mysqli_query($conn,$sql) or die(mysqli_error());
    

}
?>