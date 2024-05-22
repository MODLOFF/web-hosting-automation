<!DOCTYPE html>
<html>
<body>

<h2>Invoices List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Created At</th>
    </tr>
    <?php
    include '../../config/db.php';
    include '../../models/Invoice.php';
    $invoices = Invoice::getAll($conn);
    foreach ($invoices as $invoice) {
        echo "<tr>";
        echo "<td>" . $invoice['id'] . "</td>";
        echo "<td>" . $invoice['customer_id'] . "</td>";
        echo "<td>" . $invoice['amount'] . "</td>";
        echo "<td>" . $invoice['status'] . "</td>";
        echo "<td>" . $invoice['created_at'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
