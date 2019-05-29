<?php 
	include 'conn.php';
	$query = $conn->prepare("UPDATE users SET name = ? , tel = ? , cidade = ?, estado = ?, email = ? , info = ?, tipo = ?, cpf = ?, cnpj = ? WHERE id = ? ");
	$query->execute([$_POST['name'],$_POST['tel'],$_POST['cidade'],$_POST['estado'],$_POST['email'],$_POST['info'],$_POST['tipo'],$_POST['cpf'],$_POST['cnpj'], $_POST['id']]);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
<div class="container">
		<div class="card mt-5">
			<div class="card-body">
			<p>Seus dados foram editados</p>
			<a class="btn btn-outline-primary" role="button" href="dados.php">Ver dados</a>
			</div>
		</div>
	</div>
	
</body>
</html>
