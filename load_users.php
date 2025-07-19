<?php
$conn = new mysqli("localhost", "root", "Aa123123", "user_data");

$result = $conn->query("SELECT * FROM users");

echo "<table>
<tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    $status = $row['status'] ? "Active" : "Inactive";
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['age']}</td>
        <td>{$status}</td>
        <td><button class='toggle-btn' onclick='toggleStatus({$row['id']})'>Toggle</button></td>
    </tr>";
}

echo "</table>";
?>
