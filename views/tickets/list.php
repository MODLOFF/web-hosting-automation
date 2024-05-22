<!DOCTYPE html>
<html>
<body>

<h2>Tickets List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Status</th>
        <th>Created At</th>
    </tr>
    <?php
    include '../../config/db.php';
    include '../../models/Ticket.php';
    $tickets = Ticket::getAll($conn);
    foreach ($tickets as $ticket) {
        echo "<tr>";
        echo "<td>" . $ticket['id'] . "</td>";
        echo "<td>" . $ticket['customer_id'] . "</td>";
        echo "<td>" . $ticket['subject'] . "</td>";
        echo "<td>" . $ticket['message'] . "</td>";
        echo "<td>" . $ticket['status'] . "</td>";
        echo "<td>" . $ticket['created_at'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
