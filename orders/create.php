<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php?id=<?php echo $_GET['id'];?>" method="post">
        <input type="number" name="client_id" placeholder="client_id">
        <input type="number" name="count_in_stock" placeholder="count_in_stock">
        <input type="submit" value="send">
    </form>

    <?php

        if(isset($_POST['client_id'])) {
            $client_id = $_POST['client_id'];
            $count = $_POST['count_in_stock'];
            $product_id = $_GET['id'];

            $connection = mysqli_connect("127.0.0.1", "root", "", "progect_2");
            $query = "SELECT count_in_stock FROM products WHERE id = $product_id";
            $result = mysqli_query($connection, $query);
            $product = mysqli_fetch_assoc($result);
            $x = $product['count_in_stock'];

            if($x < $count) {
                echo "There no enough stock";
                die;
            }

            
            $order = "INSERT INTO `orders`( `client_id`,`count`) VALUES ($client_id,$count)";

            $orderResult = mysqli_query($connection, $order);

            
            $lastOrder = "SELECT id FROM orders WHERE client_id=$client_id ORDER BY id DESC LIMIT 1";

            $lastOrderResult = mysqli_query($connection, $lastOrder);

            $y = mysqli_fetch_assoc($lastOrderResult);

            $z = $y['id'];

            $sql = "INSERT INTO `order_product`(`order_id`,`product_id`)
             VALUES('$z','$product_id');";

            $sqlResult = mysqli_query($connection, $sql);

            $updatedCount = $x - $count;

            $updateProductQuery = "UPDATE products SET count_in_stock=$updatedCount WHERE id=$product_id";

            $updatedProductResult = mysqli_query($connection, $updateProductQuery);

            if($sqlResult) {
                header("location: index.php");
            }
        }
    ?>
</body>
</html>
