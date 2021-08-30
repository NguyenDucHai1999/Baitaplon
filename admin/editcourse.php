<?php
include('./template/header.php');
include('./config/db.php');


//connect
$conn = mysqli_connect('localhost', 'root', '', 'codelearn');

$successes = [];
// Update
if (isset($_POST['submitedit'])) {
    //Laasy data tu form de update
    $id = $_POST['id'];
    $course_name = $_POST['course_name'];
    $time = $_POST['time'];
    $quantity_task = $_POST['quantity_task'];
    $certificate = $_POST['certificate'];
    $description = $_POST['description'];
    $Image = $_POST['Image'];
    //SQL
    $sql = "UPDATE tbl_course SET course_name ='$course_name' , time = '$time', quantity_task = '$quantity_task',certificate = '$certificate',description = '$description',Image = '$Image' where id = '$id'";

    //Thuc thi
    if (mysqli_query($conn, $sql)) {
        $successes[] = "Update course success" ;
    } else {
        die( "Error updating record: " . mysqli_error($conn));
    }
    $result = mysqli_query($conn, $sql);
    // if($result>0)
    // {
    // header('location:'.SITEURL.'./quanlyadmin.php');
    // }

}
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
            <div class="sticky">
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
            </div>
            <div class="main-content">

                <?php
                if (!empty($successes)) {
                    foreach ($successes as $alert) {
                    }
                    echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> ' . $alert . '!
                        </div>';
                }
                ?>

                <div class="tkcourse">
                    <div class="row">

                        <div class="col-md-6">
                            <h3>Chỉnh sửa khóa học</h3>
                            <?php
                            //lấy id
                            $id = $_GET['id'];
                            //sql lấy thông tin
                            $sql = " SELECT * FROM tbl_course WHERE id ='$id'";
                            //thực thi truy vấn
                            $result = mysqli_query($conn, $sql);
                            if ($result == true) {
                                $count = mysqli_num_rows($result);

                                if ($count == 1) {

                                    $row = mysqli_fetch_assoc($result);
                                    $course_name = $row['course_name'];
                                    $time = $row['time'];
                                    $quantity_task = $row['quantity_task'];
                                    $certificate = $row['certificate'];
                                    $description = $row['description'];
                                    $Image = $row['image'];
                                }
                            }

                            ?>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Tên khóa học</p>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="<?php echo $course_name; ?>" name="course_name" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Thời lượng</p>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="<?php echo $time; ?>" name="time" type="text">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <p>Số Lượng</p>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="<?php echo $quantity_task; ?>" name="quantity_task" type="text">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <p>Chứng chỉ</p>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="<?php echo $certificate; ?>" name="certificate" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Mô tả:</p>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="<?php echo $description; ?>" name="description" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Image</p>
                                    </div>
                                    <div class="col-md-9">
                                        <input value="<?php echo $Image; ?>" name="Image" type="text">
                                    </div>
                                </div>
                                <div class="bnt-tt">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <button class="btn btn-success" name="submitedit" type="submit">Thay đổi</button>
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