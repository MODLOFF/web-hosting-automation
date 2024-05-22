<?php
include '../config/db.php';
include '../models/Customer.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $customer = new Customer($name, $email, $password);
    $customer->save($conn);

    header("Location: ../views/customers/list.php");
}
?>
