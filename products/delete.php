<?php
$connection = mysqli_connect("127.0.0.1","root","","progect_2");
$id=$_GET['id'];
$z = "DELETE from products where id=$id";
$v = mysqli_query($connection,$z);
if($v){
    header("location:index.php");
}
?>