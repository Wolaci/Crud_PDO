<?php 
include 'conn.php';
$query = $conn->prepare("INSERT INTO users (name , tel, cidade, estado, email, info, tipo, cpf, cnpj) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$query->execute([$_POST['name'],$_POST['tel'],$_POST['cidade'],$_POST['estado'],$_POST['email'],$_POST['info'],$_POST['tipo'],$_POST['cpf'],$_POST['cnpj']]);


?>
<?php 
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
			</tr>
		<?php  endforeach; ?>
	</table>
</body>
</html>

<h1>Parabéns, você cadastrou seus dados</h1>