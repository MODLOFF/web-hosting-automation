<?php
class Invoice {
    public $id;
    public $customer_id;
    public $amount;
    public $status;

    public function __construct($customer_id, $amount) {
        $this->customer_id = $customer_id;
        $this->amount = $amount;
        $this->status = 'unpaid';
    }

    public function save($conn) {
        $stmt = $conn->prepare("INSERT INTO invoices (customer_id, amount, status) VALUES (?, ?, ?)");
        $stmt->bind_param("ids", $this->customer_id, $this->amount, $this->status);
        $stmt->execute();
        $stmt->close();
    }

    public static function getAll($conn) {
        $result = $conn->query("SELECT * FROM invoices");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
