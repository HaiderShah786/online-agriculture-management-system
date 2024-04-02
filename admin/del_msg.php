<?php
require_once("./db_connect.php");

if(isset($_POST['id'])){
    $message_id = $_POST['id'];

    $query = "DELETE FROM messages WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $message_id); 

    if($stmt->execute()){
        echo 1; // Indicates success
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request"; // Indicate if the request is invalid
}

$conn->close();
?>
