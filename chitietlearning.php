<?php
include('./header.php');
// include('./admin/config/db.php');
?>
        <!-- HEADER MOBILE -->
        <header id="hd-mobile" class=" nav-top">
            <div class="one">
                <span class="fa fa-bars" aria-hidden="true" id="ham"></span>
            </div>
            <div class="two">
                <a href="/" class="logo-x">
                    <img src="assets/img/logo.png" alt="Công ty Cổ phần thương mại Eco Panel" />
                </a>
            </div>
        </header>
        <div id="overlay" class="close-small-menu"></div>
        <nav class="nav-drill">
            <ul class="nav-items nav-level-1">
                <li class="nav-item"><a href='/' class='nav-link'>Home</a></li>
                <li class="nav-item"><a href='' class='nav-link'>Category</a></li>
                <li class="nav-item"><a href='' class='nav-link'>Foods </a></li>
                <li class="nav-item"><a href='' class='nav-link'>Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="img">
            <img src="assets/img/doi-ngu-ho-tro-codelearn.png" alt="" style="width: 100%;">
        </div>
        <div class="compu">
            <div class="container">
                <div class="things">
                    <?php
                    //Connect
                    $conn = mysqli_connect('localhost','root','','codelearn');
                    //Lấy id đã được click
                    $id = $_GET['id'];
                    
                    //SQL
                    $sql = "select * from tbl_course where id='$id'";
                    $result =mysqli_query($conn,$sql);
                    if($result==true)
                            {
                                $count = mysqli_num_rows($result);
                                if($count==1)
                                {
                                    $rows=mysqli_fetch_assoc($result);
                                    $course_name = $rows['course_name'];
                                    $description = $rows['description'];
                                    $time = $rows['time'];
                                    $quantity_task = $rows['quantity_task'];
                                    $certificate =$rows['certificate'];
                                    ?>
                                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="title">
                                <h3><?php echo $course_name;?></h3>
                            </div>
                            <div class="d-flex align-items-center" style="flex-wrap: wrap;">
                                <img src="assets/img/Path 90.png" alt="">
                                <p><?php if(isset($_SESSION['is_login_name'])) echo $_SESSION['is_login_name']; ?></p>
                                <!-- <p class="ml50"> <span style="color: #FFC507;">533</span> students</p> -->
                            </div>
                            <p class="pt30 pb30"><?php echo $description?></p>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex align-items-center pb20">
                                <p class="w50">Time </p>
                                <p class="w50 text-center"><?php echo $time?> hours</p>
                            </div>
                            <div class="d-flex align-items-center pb20">
                                <p class="w50">Tasks </p>
                                <p class="w50 text-center"><?php echo $quantity_task?> Task</p>
                            </div>
                            <div class="d-flex align-items-center pb20">
                                <p class="w50">Reward </p>
                                <p class="w50 text-center"><?php echo $certificate?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row  border-0 pt30 align-items-center">
                        <div class="col-lg-7 d-flex border-0">
                            <p>Task</p>
                            <p class="ml40">Certificate</p>
                        </div>
                        <div class="col-lg-5 text-right">
                            <a href="" class="dodo">Register now</a>
                        </div>
                    </div>
                </div>
                <div class="data pt50 pb50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="thing">
                                <div class="text">
                                    <p>Tasks</p>
                                </div>
                                <ul class="text-center">
                                    <li><a href="./baihoc.php">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                                    <?php
                                }
                            }
                    ?>                   
                </div>
            </div>
        </div>
    </main>
<?php
include('./footer.php')
?>
</body>

</html>