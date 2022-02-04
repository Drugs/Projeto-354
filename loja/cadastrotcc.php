<?php
include '../includes/conexao.php';
$title = 'Cadastro';

if(isset($_POST) and $_POST != null){
	var_dump($_POST);
	$email = $_POST['email'];
	$senha =base64_encode $_POST['senha'];
	$nome = $_POST['nome'];
	$cpf  = $_POST['cpf'];
	$nascimento = $_POST['nascimento'];
	$cep  = $_POST['cep'];
	$telefone  = $_POST['telefone'];
	$endereço  = $_POST['endereço'];
	
	$insert_pessoa = "INSERT INTO pessoa (`nome`,`cpf`,`nascimento`,`cep`,`telefone`,`endereço`) values ('$nome','$cpf','$nascimento','$cep','$telefone','$endereço')";
	$query = mysqli_query($mysql , $insert_pessoa);
	$last_id = mysqli_insert_id($mysql);
	$insert_usuario = "INSERT INTO usuario( email, senha, fk_id_pessoa) VALUES ('$email','$senha','$last_id')";
	$query = mysqli_query($mysql , $insert_usuario);
	
	header('Location: logintcc.php?erro=O Cadastro foi realizado!!!');
	

	
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  rel="stylesheet">
</head>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><font color="#e92187">Tia Cleide Store</font></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          </li>
          <li class="nav-item">
            <a class="nav-link disabled"></a>
          </li>
        </ul>
		<form class="d-flex">
		<a class="btn btn-outline-success  me-2" href="tcchomepage.php"><font color="#e92187" type="submit">Voltar</font></a>
		</form>
        <form class="d-flex">
        </form>
      </div>
    </div>
  </nav>
</header>
<body class="text-center"><br>
	<div class="container">
		<h2 class="mt-5">Cadastro</h2><br>
		<div class="row justify-content-center">
			<div class="col-sm-8 col-md-6 col-lg-4">
				<form action="valida.php" method="post">
					<input placeholder="Nome" class="form-control mb-3" type="text" name="nome" />
					<input placeholder="Email" class="form-control mb-3" type="email" name="email" />
					<input  placeholder="Senha" class="form-control mb-3" type="password" name="senha" />
					<input placeholder="CPF" class="form-control mb-3" type="text" name="cpf" />
					<input class="form-control mb-3" type="date" name="nascimento" />
					<input placeholder="CEP" class="form-control mb-3" type="text" name="cep" />
					<input placeholder="Telefone" class="form-control mb-3" type="text" name="telefone" />
					<input placeholder="Endereço" class="form-control mb-3" type="text" name="endereço" />
					
					<a class="btn btn-lg btn-primary" href="#">Enviar</a>
					<p class=" link">Não tem conta?<a href="cadastrotcc.php"> Cadastre-se </a>
				</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
