<?php 
	session_start();
	include '../includes/conexao.php';
	$userid = $_SESSION['usuario_id'];
	if(isset($_GET['userid']) and $_GET['userid'] != null){
		$nome = $_GET['nome'];
		$cpf = $_GET['cpf'];
		$nascimento = $_GET['nascimento'];
		$cep = $_GET['cep'];
		$telefone = $_GET['telefone'];
		$endereço = $_GET['endereço'];
		$id = $_GET['userid'];
		$update = "update usuario set nome='$nome', cpf='$cpf', nascimento='$nascimento', cep='$cep', telefone='$telefone', endereço='$endereço'   
		where id_usuario = '$id' ";
		mysqli_query($mysql, $update);
		$_GET['id'] = $_GET['userid'];
	}
	if(isset($userid)){
		$select = "select * from usuario where id_usuario = $userid";
		$query = mysqli_query($mysql , $select);
		$result = mysqli_fetch_assoc($query);
	}
	$title = 'Editar usuário';	
			


 ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
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
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/projeto-354/"><img src= "../img/jesonelputobranco.png"alt="Image" height="18" width="18"><font color="#e92187">Tia Cleide Store</font></a>
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
		<a class="btn btn-outline-success  me-2" href="/Projeto354/"><font color="#e92187" type="submit">Voltar</font></a>
		</form>
        <form class="d-flex">
        </form>
      </div>
    </div>
  </nav>
</header>
<br><img src= "../img/jesonelputo.png" alt="Image" height="60" width="60" >
<body class="text-center">
	<div class="container">
		<h2 class="mt-3">Editar Pessoa</h2>
		<div class="row justify-content-center">
			<div class="col-sm-8 col-md-6 col-lg-4">
				<form class="row" action="">
					<input placeholder="Nome" class="form-control mb-3" type="text" name="nome"value="<?php echo $result['nome'];?>" />
					<input placeholder="CPF" class="form-control mb-3" type="text" name="cpf" value="<?php echo $result['cpf'];?>" />
					<input class="form-control mb-3" type="date" name="nascimento" value="<?php echo $result['nascimento'];?>" />
					<input placeholder="CEP" class="form-control mb-3" type="text" name="cep" value="<?php echo $result['cep'];?>" />
					<input placeholder="Telefone" class="form-control mb-3" type="text" name="telefone" value="<?php echo $result['telefone'];?>"/>
					<input placeholder="Endereço" class="form-control mb-3" type="text" name="endereço" value="<?php echo $result['endereço'];?>" />
					<input type="hidden" name="userid" value="<?php echo $result['id_usuario'];?>" />
					
					<input class="w-100 btn btn-primary btn-lg" type="submit" "background: #e92187;" />
				</form>
			</div>
		</div>
	</div><br>
    <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">© 2021 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>
	<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><i class="bi bi-twitter"></i></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><i class="bi bi-instagram"></i></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><i class="bi bi-facebook"></i></svg></a></li>
    </ul>
  </footer>
</body>
</html>