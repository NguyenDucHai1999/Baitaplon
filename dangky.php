
<!DOCTYPE html>
<html lang="vi">

<head>
    <title></title>
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
    <main>
        <div class="dangky">
            <div class="container">
                <div class="things">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="logo d-flex align-items-center" style="flex-wrap: wrap;">
                                <div class="img" style="flex: 1; text-align: center;">
                                    <img src="assets/img/logo.png" alt="" >
                                </div>
                                <div class="text w-50 d-flex justify-content-end">
                                    <p>Đăng nhập</p>
                                    <p class="active"><a>Đăng ký</p>
                                </div>
                            </div>
                            <div class="col67 pt50">
                                <div class="title">
                                    <h3>Đăng ký</h3>
                                </div>
                                <form action="./sign-up-guest.php" method =POST>
                                    <input type="text" placeholder="Username" name="user_name">
                                    <input type="text" placeholder="Email" name="email">
                                    <input type="text" placeholder="Password" name="password">
                                    <!-- <input type="text" placeholder="Nhập lại mật khẩu" name=""> -->
                                    <div class="form-group form-check mt20">
                                        <!-- <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> I agree to Codelearn <a
                                                href="">Term
                                                of Use</a>
                                        </label> -->
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="submit">Đăng ký</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="assets/img/head-left-bg.png" alt="" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- SCRIPT -->
    <script src="assets/js/jquery3.3.1.min.js"></script>
    <script src="assets/libs/bs/bootstrap.min.js"></script>
    <script src="assets/libs/OwlCarousel/owl.carousel.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
