<?php
require_once("./db_connect.php");

if(isset($_POST['id'])){
    $message_id = $_POST['id'];
    $query = "SELECT message FROM messages WHERE id = $message_id";
    $result = $conn->query($query);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        echo $row['message']; // Return the message content
    } else {
        echo "Message not found";
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>
