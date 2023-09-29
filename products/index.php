<?php
$connection = mysqli_connect("127.0.0.1","root","","progect_2");
$s = "SELECT * from products";
$x = mysqli_query($connection,$s);
$records = [];

for($i=0; $i < mysqli_num_rows($x); $i++){
    $records[]=mysqli_fetch_assoc($x);

}
echo "<h2>products</h2>";
echo "<p><a href='create.php'>create</a></p>";
foreach ($records as $product) {
    $id = $product['id'];
    $name = $product['name'];
    echo "<p>$id- $name <a href='edit.php?id=$id'>edit</a> ||<a href='delete.php?id=$id'>delete</a> ||<a href='details.php?id=$id'>details</a> ||<a href='../orders/create.php?id=$id'>create</a> || </p>";
}

?>