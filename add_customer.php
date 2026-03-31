<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO customers (name, email, phone)
        VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Customer added successfully";
} else {
    echo "Error: " . $conn->error;
}
?>
