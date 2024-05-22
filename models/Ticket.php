<?php
class Ticket {
    public $id;
    public $customer_id;
    public $subject;
    public $message;
    public $status;

    public function __construct($customer_id, $subject, $message) {
        $this->customer_id = $customer_id;
        $this->subject = $subject;
        $this->message = $message;
        $this->status = 'open';
    }

    public function save($conn) {
        $stmt = $conn->prepare("INSERT INTO tickets (customer_id, subject, message, status) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $this->customer_id, $this->subject, $this->message, $this->status);
        $stmt->execute();
        $stmt->close();
    }

    public static function getAll($conn) {
        $result = $conn->query("SELECT * FROM tickets");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
