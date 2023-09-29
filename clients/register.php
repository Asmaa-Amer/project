<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
         <input type="text" name="name" placeholder="name"><br><br>
         <input type="text" name="username" placeholder="username"><br><br>
         <input type="text" name="email" placeholder="email"><br><br>
         <input type="password" name="password" placeholder="password"><br><br>
         <input type="number" name="phone" placeholder="phone"><br><br>
         <input type="text" name="full_address" placeholder="full_address"><br><br>
         <input type="submit" value="Go">
    </form>
    <?php
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $full_address=$_POST['full_address'];
        $connection = mysqli_connect("127.0.0.1","root","","progect_2");
        $z = "INSERT INTO `clients`
        (`name`,`username`,`email`,`password`,`phone`,`full_address`)
        VALUES
        ('$name','$username','$email','$password','$phone','$full_address');";
        $result = mysqli_query($connection,$z);
        if($result){
           header ("location:login.php");
        }
    }
    
    ?>

    
</body>
</html>