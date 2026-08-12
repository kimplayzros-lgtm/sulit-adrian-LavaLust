<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show</title>
</head>
<link rel="stylesheet" href="style.css">
<body>

<?php
require('connection.php');

$stmt = $pdo->prepare("SELECT * FROM d_users");
$stmt->execute();
$rows = $stmt->fetchAll();
?>

<h2>User List</h2>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Action</th>
    </tr>

    <?php foreach($rows as $row): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['ckads_last_name'] ?></td>
        <td><?= $row['ckads_first_name'] ?></td>
        <td><?= $row['ckads_email'] ?></td>
        <td><?= $row['ckads_gender'] ?></td>
        <td><?= $row['ckads_address'] ?></td>
        <td>
    <a href="update.php?id=<?= $row['id'] ?>">Update</a> |
    <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
</td>
    </tr>
    <?php endforeach; ?>

</table>


</body>
</html>

<a href="insert.php">
    <button>Add Record</button>
</a>