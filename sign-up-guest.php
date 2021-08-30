<?php
include('./admin/config/db.php');
?>
<?php
    ////Thực hiện và lưu vào database
    //Kiểm tra xem button có được click k
    if (isset($_POST['submit'])) {
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        //truy vấn
        $sql = " insert into tbl_user (user_name,email,password) VALUES('$user_name','$email','$password')";
        
        
        $conn = new mysqli("localhost", "root", "", "codelearn");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        if ($conn->query($sql) === TRUE) {
            header('location:'.SITEURL.'./dangnhap.php');
        } 
    }
    ?>
<?php
?>