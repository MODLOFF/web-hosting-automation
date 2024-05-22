<!DOCTYPE html>
<html>
<body>

<h2>Customers List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
    </tr>
    <?php
    include '../../config/db.php';
    include '../../models/Customer.php';
    $customers = Customer::getAll($conn);
    foreach ($customers as $customer) {
        echo "<tr>";
        echo "<td>" . $customer['id'] . "</td>";
        echo "<td>" . $customer['name'] . "</td>";
        echo "<td>" . $customer['email'] . "</td>";
        echo "<td>" . $customer['created_at'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
