<?php

include('./admin/config/db.php');

//Check xem button duoc click chua
if(isset($_POST['submit']))
{
    //Xu ly dang nhap
    //Lay data tu form
     $user_name = $_POST['user_name'];
     $password= $_POST['password'];
     //SQL
     $conn = mysqli_connect('localhost','root','','codelearn');
     $sql = "select * from tbl_user where user_name='$user_name' and password ='$password'";
     $result = mysqli_query($conn,$sql);
     $count = mysqli_num_rows($result);
     if($count==1)
     {
         //User Avaiable
         $_SESSION['is_login_frontend'] = 1;
         $_SESSION['is_login_name'] = mysqli_fetch_assoc($result)['user_name'];
         header('location:'.SITEURL.'./index.php');
     }
     else
     {
         //User not avaiable
         echo 'Sai nguoi dung';
         header('location:'.SITEURL.'./dangnhap.php');
     }
} 
?>