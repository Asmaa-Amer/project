<?php

$connection = mysqli_connect("127.0.0.1", "root", "", "progect_2");

$sql = "SELECT * FROM orders";

$result = mysqli_query($connection, $sql);

$records = [];
for($i = 0; $i < mysqli_num_rows($result); $i++) {
    $records[] = mysqli_fetch_assoc($result);
}

echo "<p><a href='../products/index.php'>All products</a></p>";

foreach($records as $product) {
    $id = $product['id'];
    $client_id = $product['client_id'];
    echo "<p>$id) $client_id</p>";
}