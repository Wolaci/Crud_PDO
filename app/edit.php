<?php 
	include 'conn.php';

	$id = $_GET['id'];

	$edit=$conn->prepare('SELECT * FROM users WHERE id = ?');
	$edit->execute([$id]);
	$editar = $edit->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
	<form action="editar.php" name="form1" method="POST">
		<input type="hidden" name="id" value="<?= $editar['id'] ?>">
		
		<div class="row">
			<div class="col">
				<label>Nome: </label>
				<input type="text" name="name" value="<?= $editar['name'] ?>">
			</div>
			<div class="col">
				<label>Telefone: </label>
				<input type="text" name="tel" value="<?= $editar['tel'] ?>">
			</div>
		</div>
		
		<div class="row">
			<div class="col">
				<label>Cidade: </label>
				<input type="text" name="cidade" value="<?= $editar['cidade'] ?>">
			</div>
			<div class="col">
				<label>Estado: </label>
				<input type="text" name="estado" value="<?= $editar['estado'] ?>">
			</div>	
		</div>	
		

		<div class="row">
			<div class="col">
				<label>E-mail: </label>
				<input type="text" name="email" value="<?= $editar['email'] ?>">
			</div>
			<div class="col">
				<label>Informações Adicionais: </label>
				<input type="text" name="info" value="<?= $editar['info'] ?>">
			</div>
		</div>	

		<div class="row">	
			<div class="col-6">
				<label>Tipo Cliente: </label>
				<input type="text" name="tipo" value="<?= $editar['tipo'] ?>">
			</div>
			<div class="col-6">
				<label>CPF: </label>
				<input type="text" name="cpf" value="<?= $editar['cpf'] ?>">
			</div>
			<div class="row">
				<div class="col">
				<label>CNPJ: </label>
				<input type="text" name="cnpj" value="<?= $editar['cnpj'] ?>">
				</div>
			</div>
		</div>

		<input class="btn btn-outline-primary" role="button" type="submit" value="editar dados">
	</form>
</div>
</body>
</html>