<?php 
$conn = new PDO("mysql:host=localhost;dbname=tecnologia", "root", "ifpe");
$query = $conn->prepare("INSERT INTO users (name , tel, cidade, estado, email, info, tipo, cpf, cnpj) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$query->execute([$_POST['name'],$_POST['tel'],$_POST['cidade'],$_POST['estado'],$_POST['email'],$_POST['info'],$_POST['tipo'],$_POST['cpf'],$_POST['cnpj']]);


?>

<h1>Parabéns, você cadastrou seus dados</h1>