<?php
   include("./header.php");
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
        <div class="search">
            <div class="container">
                <h3>Learning code online. Let's start with your first course!</h3>
                <form action="">
                    <input type="text" placeholder="Search">
                    <button><img src="assets/img/Path 81.png" alt=""></button>
                </form>
            </div>
        </div>
        <div class="basic pt50 pb50">
            <div class="container">
                <div class="title">
                    <h3>Basic knowledge</h3>
                </div>
                <div class="row">
                    <?php
                    $conn = mysqli_connect('localhost','root','','codelearn');
                    $sql = $sql = "SELECT * FROM tbl_course";
                    $result =mysqli_query($conn,$sql);
                    $count =mysqli_num_rows($result);
                    if(mysqli_num_rows($result)>0)
                    {
                        $i=1;
                        while($rows = mysqli_fetch_assoc($result))
                        {
                            $id = $rows['id'];
                            $course_name = $rows['course_name'];
                            $description = $rows['description'];
                            ?>
                            <div class="col-lg-3">
                        <div class="things">
                            <img src="assets/img/sdfadsfdsaf.png" alt="" style="width: 100%;">
                            <div class="text">
                                <img src="assets/img/star.png" alt="">
                                <a href="./chitietlearning.php?id=<?=$id?>"><h3><?php echo $course_name;?></h3></a>
                                <strong><?php if(isset($_SESSION['is_login_name'])) echo $_SESSION['is_login_name']; ?></strong>
                                <p><?php echo $description;?></p>
                                <div class="border"></div>
                                <h3>Free</h3>
                            </div>
                        </div>
                   
                </div>
                            <?php
                            $i++;
                        }
                    }
                    ?>                  
                </div>
                
            </div>
            
        </div>
        
    </main>
<?php
   include("footer.php");
?>



</body>

</html>