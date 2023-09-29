<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=for, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
         <input type="text" name="email" placeholder="email"><br><br>
         <input type="password" name="password" placeholder="password"><br><br>
         <input type="submit" value="SEND">
    </form>
</body>
<?php
if(isset($_POST['email'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $connection = mysqli_connect("127.0.0.1","root","","progect_2");
        $sql = "SELECT * from clients where email='$email' AND password='$password';";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0){
            header("location:../products/index.php");
        }
        else{
            echo "check your email and password";
        }

}
?>
</html>