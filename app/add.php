<?php 
include 'conn.php';

$query = $conn->prepare("INSERT INTO users (name , tel, cidade, estado, email, info, tipo, cpf, cnpj) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$query->execute([$_POST['name'],$_POST['tel'],$_POST['cidade'],$_POST['estado'],$_POST['email'],$_POST['info'],$_POST['tipo'],$_POST['cpf'],$_POST['cnpj']]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Você cadastrou seus dados, clique no link abaixo para ver seus dados:</p>
	<a href="dados.php">ver dados</a>
</body>
</html>
