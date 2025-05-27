<?php
class mydb {
    public function getElementById() {
        // Your database connection logic here
        $conn = new mysqli("localhost", "root", "", "mydb");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function login($conn, $table, $phone) {
        $sql = "SELECT * FROM $table WHERE phone = '$phone'";
        return $conn->query($sql);
    }
}
?>
