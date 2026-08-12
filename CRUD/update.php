<?php
require('connection.php');
$stmt = $pdo->prepare('SELECT * FROM d_users WHERE id = ?');
$stmt->execute([$_GET['id']]);
$row = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['ckads_first_name'];
    $lastname = $_POST['ckads_last_name'];
    $email = $_POST['ckads_email'];
    $gender = $_POST['ckads_gender'];
    $address = $_POST['ckads_address'];

    $stmt = $pdo->prepare('UPDATE d_users SET ckads_first_name = ?, ckads_last_name = ?, ckads_email = ?, ckads_gender = ?, ckads_address = ? WHERE id = ?');
    $stmt->execute([$firstname, $lastname, $email, $gender, $address, $_GET['id']]);

    if ($stmt->rowCount() > 0) {
        echo 'Updated successfully!';
    } else {
        echo 'Something went wrong.';
    }

    header('Location: index.php');
    exit;
}
?>
<link rel="stylesheet" href="style.css">
<form action="" method="post">
    <label for="ckads_firstname">Firstname</label><br>
    <input type="text" name="ckads_first_name" id="firstname" value="<?= ($row['ckads_first_name']) ?>" required><br><br>
    <label for="ckads_lastname">Lastname</label><br>
    <input type="text" name="ckads_last_name" id="lastname" value="<?= ($row['ckads_last_name']) ?>" required><br><br>
    <label for="ckads_email">Email</label><br>
    <input type="email" name="ckads_email" id="email" value="<?=($row['ckads_email']) ?>" required><br><br>
    <label for="ckads_gender">Gender</label><br>
    <input type="text" name="ckads_gender" id="gender" value="<?= ($row['ckads_gender']) ?>" required><br><br>
    <label for="hgpm_address">Address</label><br>
    <input type="text" name="ckads_address" id="address" value="<?= ($row['ckads_address']) ?>" required><br><br>
    <input type="submit" value="Update">
</form>