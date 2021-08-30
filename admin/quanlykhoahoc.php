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
                <div class="right">
                    <a href="./insertcourse.php">Thêm mới</a>
                </div>
            </div>
            <div class="main-content">

                <div class="row">
                    <div class="col-12">
                        <!-- ORDERS TABLE -->
                        <div class="box">
                            <div class="box-body overflow-scroll">
                                <table>
                                <thead>
                                        <tr class="blue">
                                            <th class="pl20">STT</th>
                                            <th>Tên Khóa học</th>
                                            <th>Thời lượng</th>
                                            <th>Số lượng bài học</th>
                                            <th>Certificate</th>
                                            <th class="jsx-width"></th>

                                        </tr>
                                </thead>
                                    <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'codelearn');
                                    $sql = $sql = "SELECT * FROM tbl_course";
                                    $result = mysqli_query($conn, $sql);
                                    $count = mysqli_num_rows($result);
                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 1;
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                            $id = $rows['id'];
                                            $course_name = $rows['course_name'];
                                            $time = $rows['time'];
                                            $quantity_task = $rows['quantity_task'];
                                            $certificate = $rows['certificate'];
                                    ?>
                                    <tbody>
                                            <tr>
                                                <td class="pl20"><?php echo $id; ?></td>
                                                <td><?php echo $course_name; ?></td>
                                                <td><?php echo $time; ?></td>
                                                <td><?php echo $quantity_task; ?></td>
                                                <td><?php echo $certificate; ?></td>
                                                <td style="display: flex;">
                                                    <div class="edit"> <a href="./editcourse.php?id=<?php echo $id ?>">Sửa</a></div>

                                                    <div class="btn btn-danger delete"><a href="./deletecourse.php?id=<?php echo $id ?>">Xóa</a></div>
                                                </td>
                                            </tr>
                                    </tbody>

                                    <?php
                                            $i++;
                                        }
                                    }
                                    ?>
        
                                    <!-- <thead>
                                        <tr class="blue-bot">
                                            <th class="pl20">STT</th>
                                            <th>Tên Học viên</th>
                                            <th>Email</th>
                                            <th>Chức vụ</th>
                                            <th>Đã đăng ký</th>
                                            <th class="jsx-width"></th>
                                        </tr>
                                    </thead> -->
                                </table>
                            </div>
                        </div>
                        <!-- END ORDERS TABLE -->
                    </div>
                </div>
                <div class="dk">
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h2>Bạn chắc chắn muốn xóa khóa học này</h2>
                                <div class="bnt-content">
                                    <button type="button" class="btn-question yes">yes</button>
                                    <button type="button" class="btn-question">no</button>
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
    include('./template/footer.php')
    ?>