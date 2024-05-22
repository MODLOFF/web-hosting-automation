<?php
include '../config/db.php';
include '../models/Invoice.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_id = $_POST['customer_id'];
    $amount = $_POST['amount'];

    $invoice = new Invoice($customer_id, $amount);
    $invoice->save($conn);

    header("Location: ../views/invoices/list.php");
}
?>
