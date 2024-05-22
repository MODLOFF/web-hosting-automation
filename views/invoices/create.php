<!DOCTYPE html>
<html>
<body>

<h2>Create Invoice</h2>
<form method="post" action="../../controllers/InvoiceController.php">
  Customer ID: <input type="number" name="customer_id" required><br>
  Amount: <input type="number" step="0.01" name="amount" required><br>
  <input type="submit" value="Create Invoice">
</form>

</body>
</html>
