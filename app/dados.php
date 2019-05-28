<?php 
	include 'conn.php';
	$dados=$conn->prepare('SELECT * FROM users');
	$dados->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<tr>
		<th>Código</th>
		<th>Nome</th>
		<th>Telefone</th>
		<th>Cidade</th>
		<th>Estado</th>
		<th>E-mail</th>
		<th>Info</th>
		<th>tipo</th>
		<th>CPF</th>
		<th>CNPJ</th>
	</tr>
		<?php  foreach ($dados as $dado):?>
			<tr>
				<td><?=$dado[0]?></td>
				<td><?=$dado[1]?></td>
				<td><?=$dado[2]?></td>
				<td><?=$dado[3]?></td>
				<td><?=$dado[4]?></td>
				<td><?=$dado[5]?></td>
				<td><?=$dado[6]?></td>
				<td><?=$dado[7]?></td>
				<td><?=$dado[8]?></td>
				<td><?=$dado[9]?></td>
				<td><?=$dado[10]?></td>
				<td><a href="delete.php?id=<?=$dado[0]?>" >excluir<a></td>
				<td><a href="edit.php?id=<?=$dado[0]?>">editar</a></td>	
			</tr>
		<?php  endforeach; ?>
	</table>
</body>
</html>

<h1>Parabéns, você cadastrou seus dados</h1>