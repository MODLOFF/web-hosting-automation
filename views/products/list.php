<!DOCTYPE html>
<html>
<body>

<h2>Products List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Created At</th>
    </tr>
    <?php
    include '../../config/db.php';
    include '../../models/Product.php';
    $products = Product::getAll($conn);
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . $product['id'] . "</td>";
        echo "<td>" . $product['name'] . "</td>";
        echo "<td>" . $product['description'] . "</td>";
        echo "<td>" . $product['price'] . "</td>";
        echo "<td>" . $product['created_at'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
