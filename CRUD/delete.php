
<?php
require('connection.php');


$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM d_users WHERE id=?");
$stmt->execute([$id]);

header("Location: index.php");
exit;
?>