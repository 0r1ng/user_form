<?php
$conn = new mysqli("localhost", "root", "Aa123123", "user_data");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);

    $res = $conn->query("SELECT status FROM users WHERE id=$id");
    $current = $res->fetch_assoc()['status'];
    $newStatus = $current == 1 ? 0 : 1;

    $conn->query("UPDATE users SET status=$newStatus WHERE id=$id");
}

include 'load_users.php';
?>
