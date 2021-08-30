<?php
include('./config/db.php');
$conn = mysqli_connect('localhost','root','','codelearn');
$id = $_GET['id'];
$sql = " DELETE from tbl_course WHERE id ='$id'";
$result =mysqli_query($conn,$sql);
if($result==true)
{
header('location:'.SITEURL.'./admin/quanlykhoahoc.php');
}
else
{
    echo "Lam lai de ";
}

?>