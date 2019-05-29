<?php 
	include 'conn.php';
	$query = $conn->prepare("UPDATE users SET name = ? , tel = ? , cidade = ?, estado = ?, email = ? , info = ?, tipo = ?, cpf = ?, cnpj = ? WHERE id = ? ");
	$query->execute([$_POST['name'],$_POST['tel'],$_POST['cidade'],$_POST['estado'],$_POST['email'],$_POST['info'],$_POST['tipo'],$_POST['cpf'],$_POST['cnpj'], $_POST['id']]);
 ?>

 <h1>Seus dados foram editados</h1>
<a href="dados.php">ver dados</a>