<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Login</title>
</head>
<body class="text-center">
	<div class="container">
		<h2 class="mt-5">Login</h2>
		<?php
			if(isset($_GET['erro']) and $_GET != null){
				echo "<p>{$_GET['erro']}</p>";
			}else{
				echo "<p>Faça login para acessar a lorja</p>";
			}
		?>
		
		<div class="row justify-content-center">
			<div class="col-sm-8 col-md-6 col-lg-4">
				<form action="valida.php" method="post">
					<input placeholder="Digite seu email" class="form-control mb-3" type="email" name="email" />
					<input  placeholder="Digite a senha" class="form-control mb-3" type="password" name="senha" />
					<input class="w-100 btn btn-primary btn-lg" type="submit" />
					<a href='cadastrotcc.php' class="w-100 btn mt-3 btn-outline-primary
					btn.lg">Cadastre-se</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>