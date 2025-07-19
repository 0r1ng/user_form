<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <style>
        input, button {
            margin: 5px;
            padding: 6px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        .toggle-btn {
            background-color: #ddd;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h3>Add User</h3>
<form method="POST" action="submit.php">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <input type="submit" value="Submit">
</form>

<h3>All Users</h3>
<div id="userTable">
    <?php include 'load_users.php'; ?>
</div>

<script>
    function toggleStatus(id) {
        fetch('toggle.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'id=' + id
        })
        .then(res => res.text())
        .then(data => {
            document.getElementById('userTable').innerHTML = data;
        });
    }
</script>

</body>
</html>
