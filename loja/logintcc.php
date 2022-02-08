<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
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
	<title>Login</title>
	<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
     <a class="navbar-brand" href="#"><img src= "../img/jesonelputo.png"alt="Image" height="25" width="25"><font color="#e92187">Tia Cleide Store</font></a>
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
	<br><img src= "../img/jesonelputo.png" alt="Image" height="60" width="60" >
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
				<form action="validalogin.php" method="post">
					<input placeholder="Digite seu email" class="form-control mb-3" type="email" name="email" />
					<input  placeholder="Digite a senha" class="form-control mb-3" type="password" name="senha" />
					<input class="w-100 btn btn-primary btn-lg" type="submit" />
					<p class=" link">Não tem conta?<a href="cadastrotcc.php"> Cadastre-se </a>
				</p>
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
</div>
</body>
</html>