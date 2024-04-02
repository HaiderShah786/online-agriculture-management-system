<?php
$conn = new mysqli("localhost", "root", "", "final_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (email, message) VALUES ('$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Your messagehas been sent successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>