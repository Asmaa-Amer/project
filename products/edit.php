<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    
     $connection = mysqli_connect("127.0.0.1","root","","progect_2");
     $id = $_GET['id'];
     $z = "SELECT * from products where id=$id";
     $v = mysqli_query($connection,$z);
     $y = mysqli_fetch_assoc($v);

    ?>

    <p><a href='index.php'>All products</a>
    <form action="edit.php?id=<?php echo $_GET["id"];?>" method="post">
        <input type="text" name="name" placeholder="name" value="<?=$y['name'];?>"><br><br>
        <input type="text" name="size" placeholder="size" value="<?=$y['size'];?>"><br><br>
        <input type="text" name="color" placeholder="color" value="<?=$y['color'];?>"><br><br>
        <input type="number" name="count_in_stock" placeholder="count_in_stock" value="<?=$y['count_in_stock'];?>"><br><br>
        <input type="submit" value="Go">
        
        
            
    </form>


    <?php
        if(isset($_POST['name'])) {
            $name = $_POST['name'];
            $size = $_POST['size'];
            $color = $_POST['color'];
            $count_in_stock = $_POST['count_in_stock'];
            $product_id = $_GET['id'];

            
            $query = "UPDATE products SET name='$name',size='$size',color='$color',count_in_stock=$count_in_stock WHERE id=$product_id";

           
            mysqli_query($connection, $query);

            header("Location: index.php");
        }
    ?>
</body>
</html>
