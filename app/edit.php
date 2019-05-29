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
		<label>nome</label>
		<input type="text" name="name" value="<?= $editar['name'] ?>">
		<input type="text" name="tel" value="<?= $editar['tel'] ?>">
		<input type="text" name="cidade" value="<?= $editar['cidade'] ?>">
		<input type="text" name="estado" value="<?= $editar['estado'] ?>">
		<input type="text" name="email" value="<?= $editar['email'] ?>">
		<input type="text" name="info" value="<?= $editar['info'] ?>">
		<input type="text" name="tipo" value="<?= $editar['tipo'] ?>">
		<input type="text" name="cpf" value="<?= $editar['cpf'] ?>">
		<input type="text" name="cnpj" value="<?= $editar['cnpj'] ?>">

		<input type="submit" value="editar dados">
	</form>
</body>
</html>