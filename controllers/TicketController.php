<?php
include '../config/db.php';
include '../models/Ticket.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_id = $_POST['customer_id'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $ticket = new Ticket($customer_id, $subject, $message);
    $ticket->save($conn);

    header("Location: ../views/tickets/list.php");
}
?>
