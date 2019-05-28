<?php 
include 'conn.php';

$id = $_GET['id'];

$apagar = $conn->prepare("DELETE FROM users  WHERE id = ? ");
$apagar->execute([$id]);

header('location:dados.php');
?>