<!DOCTYPE html>
<html>
<body>

<h2>Add Product</h2>
<form method="post" action="../../controllers/ProductController.php">
  Name: <input type="text" name="name" required><br>
  Description: <input type="text" name="description" required><br>
  Price: <input type="number" step="0.01" name="price" required><br>
  <input type="submit" value="Add Product">
</form>

</body>
</html>
