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
</head>
<body>
	<form action="editar.php" name="form1" method="POST">
		<input type="hidden" name="id" value="<?= $editar['id'] ?>">
		<label>Nome: </label>
		<input type="text" name="name" value="<?= $editar['name'] ?>">
		<label>Telefone: </label>
		<input type="text" name="tel" value="<?= $editar['tel'] ?>">
		<label>Cidade: </label>
		<input type="text" name="cidade" value="<?= $editar['cidade'] ?>">
		<label>Estado: </label>
		<input type="text" name="estado" value="<?= $editar['estado'] ?>">
		<label>E-mail: </label>
		<input type="text" name="email" value="<?= $editar['email'] ?>">
		<label>Informações Adicionais: </label>
		<input type="text" name="info" value="<?= $editar['info'] ?>">
		<label>Tipo Cliente: </label>
		<input type="text" name="tipo" value="<?= $editar['tipo'] ?>">
		<label>CPF: </label>
		<input type="text" name="cpf" value="<?= $editar['cpf'] ?>">
		<label>CNPJ: </label>
		<input type="text" name="cnpj" value="<?= $editar['cnpj'] ?>">

		<input type="submit" value="editar dados">
	</form>
</body>
</html>