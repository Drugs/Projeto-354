<?php
	include "../includes/conexao.php";
	
$sql = 'Select * from pessoa';
$query = mysqli_query($mysql , $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Lista de pessoas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  rel="stylesheet">
	<link href="../css/carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
	<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
</head>
<body>
	<div class="container">
		<h2  class="my-3">Seus Dados</h2>
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