<?php
$connection = mysqli_connect("127.0.0.1","root","","progect_2");
$id = $_GET['id'];
$z = "SELECT * from products where id=$id";
$v = mysqli_query($connection,$z);
$product = mysqli_fetch_assoc($v);
echo "<p><a href='index.php'>products</a> or <a href='../orders/create.php?id=$id'>create</a></p>";
echo "<p>ID: " . $product['id'] ."</p>";
echo "<p>name: " . $product['name'] ."</p>";
echo "<p>size: " . $product['size'] ."</p>";
echo "<p>color: " . $product['color'] ."</p>";
echo "<p>count_in_stock: " . $product['count_in_stock'] ."</p>";
?>