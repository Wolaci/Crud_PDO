<?php 
	include 'conn.php';
	$dados=$conn->prepare('SELECT * FROM users');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<tr>
		<th>Nome</th>
		<th>Código</th>
		<th>Validade</th>
		<th>Chegada</th>
		<th>Lote</th>
		<th>Quantidade</th>
		<th>Excluir</th>
		<th>Vendas</th>
		<th>Situação do Produto</th>
	</tr>
		<?php  foreach ($dados as $dado):?>
			<tr>
				<td><?= $dado[0]?></td>
				<td><?=$dado[1]?></td>

			</tr>
		<?php  endforeach; ?>
	</table>
</body>
</html>