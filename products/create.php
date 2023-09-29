<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href ='index.php'>product</a></p>
    <form action="create.php" method="post">
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="size" placeholder="size"><br><br>
        <input type="text" name="color" placeholder="color"><br><br>
        <input type="number" name="count_in_stock" placeholder="count_in_stock"><br><br>
        <input type="submit" value="Go">
        
    </form>
    <?php
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $size=$_POST['size'];
        $color=$_POST['color'];
        $count_in_stock=$_POST['count_in_stock'];
        $connection = mysqli_connect("127.0.0.1","root","","progect_2");
        $v = "INSERT INTO `products`
        (`name`,`size`,`color`,`count_in_stock`)
        VALUES
        ('$name','$size','$color','$count_in_stock');";
         $result = mysqli_query($connection,$v);
         header("location:index.php");

    }

    ?>
    
</body>
</html>