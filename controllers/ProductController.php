<?php
include '../config/db.php';
include '../models/Product.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $product = new Product($name, $description, $price);
    $product->save($conn);

    header("Location: ../views/products/list.php");
}
?>
