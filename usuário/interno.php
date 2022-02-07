<?php
	include "../includes/conexao.php";

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Lista de pessoas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h2  class="my-3">Lista de pessoas</h2>
		<table class="my-4 table">
			<tr class="table-dark">
				<th>Pessoa</th>
				<th>Email</th>
				<th>CPF</th>
				<th>Nascimento</th>
				<th>Endereço</th>
				<th>CEP</th>
				<th>Telefone</th>
				<th>Editar</th>
				<th>Deletar</th>
			</tr>
		<?php
			foreach($result as $linha) {
				echo '<tr>';
				echo '<td>' .$linha['nome']. '</td>';
				echo '<td>' .$linha['email']. '</td>';
				echo '<td>' .$linha['cpf']. '</td>';
				echo '<td>' .$linha['nascimento']. '</td>';
				echo '<td>' .$linha['endereço']. '</td>';
				echo '<td>' .$linha['cep']. '</td>';
				echo '<td>' .$linha['telefone']. '</td>';
				echo '<td><a class="btn btn-warning"
				href = "editar.php?id='.$linha['id_pessoa'].'">Editar</a></td>';
				echo '<td><a class="btn btn-danger"
				href="apagar.php?id='.$linha['id_pessoa'].'" >Apagar</a></td>';
				echo '</tr>';
			}
		?>	
</body>
</html>