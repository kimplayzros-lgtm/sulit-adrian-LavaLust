<?php
require('connection.php');


if(isset($_POST['save'])){

   $sql = "INSERT INTO d_users
(ckads_last_name, ckads_first_name, ckads_email, ckads_gender, ckads_address)
VALUES (?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['lastname'],
    $_POST['firstname'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['address']
]);


    header("Location: index.php"); // balik sa list after save
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add User Record</h2>

<form method="POST">
Last Name:<br>
<input type="text" name="lastname"><br><br>
First Name:<br>
<input type="text" name="firstname"><br><br>
Email:<br>
<input type="email" name="email"><br><br>
Gender:<br>
<input type="text" name="gender"><br><br>
Address:<br>
<input type="text" name="address"><br><br>
<button name="save">Save</button>

</form>

</body>
</html>