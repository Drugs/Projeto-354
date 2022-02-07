<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  rel="stylesheet">
	<link href="../css/carousel.css" rel="stylesheet">
	<title>Login</title>
	<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/projeto-354/""><font color="#e92187">Tia Cleide Store</font></a>
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
		<a class="btn btn-outline-success  me-2" href="/projeto-354/"><font color="#e92187" type="submit">Voltar</font></a>
		</form>
        <form class="d-flex">
        </form>
      </div>
    </div>
  </nav>
</header>
</head>

<body class="text-center">
	<div class="container">
	<br><img src="https://i.ibb.co/Zc914Q6/Verde-e-Rosa-Logo-Minimalista.png">
		<h2 class="mt-5">Login</h2>
		<?php
			if(isset($_GET['erro']) and $_GET != null){
				echo "<p>{$_GET['erro']}</p>";
			}else{
				echo "<p>Faça login para acessar a loja</p>";
			}
		?>
		
		<div class="row justify-content-center">
			<div class="col-sm-8 col-md-6 col-lg-4">
				<form action="valida.php" method="post">
					<input placeholder="Digite seu email" class="form-control mb-3" type="email" name="email" />
					<input  placeholder="Digite a senha" class="form-control mb-3" type="password" name="senha" />
					<input class="w-100 btn btn-primary btn-lg" type="submit" />
					<p class=" link">Não tem conta?<a href="cadastrotcc.php"> Cadastre-se </a>
				</p>
				</form>
			</div>
		</div>
	</div><br>
</body>
</html>