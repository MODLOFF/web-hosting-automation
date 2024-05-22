<!DOCTYPE html>
<html>
<body>

<h2>Create Ticket</h2>
<form method="post" action="../../controllers/TicketController.php">
  Customer ID: <input type="number" name="customer_id" required><br>
  Subject: <input type="text" name="subject" required><br>
  Message: <textarea name="message" required></textarea><br>
  <input type="submit" value="Create Ticket">
</form>

</body>
</html>
