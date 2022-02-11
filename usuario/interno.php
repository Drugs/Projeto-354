<?php
	session_start();
	include '../includes/conexao.php';
	$sql = "select * from pessoa 
		join usuario on usuario.fk_id_pessoa = pessoa.id_pessoa
		where id_usuario = {$_SESSION['id_usuario']} ";
	$mysql = mysqli_query($mysql , $sql);
	$result = mysqli_fetch_assoc($mysql);
	$_SESSION['usuario_nome'] = $result['nome'];
	#$_SESSION[] = $result[''];
?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
   <meta charset="UTF-8">
   <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/carousel.css" rel="stylesheet">
   <link href="../css/interno.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
   <title>Usuário</title>
</head>

<body>
   <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
         <div class="container-fluid">
            <a class="navbar-brand ms-2" href="#"><img src="../img/jesonelwhite.png" alt="Image" height="15" width="15" class="me-1" style="vertical-align:baseline;">
               <font color="#e92187">Tia Cleide Store</font>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                     <a class="nav-link disabled"></a>
                  </li>
               </ul>
               <form class="d-flex" style="margin-bottom: 0px;">
                  <a class="btn btn-outline-success  me-2" href="/projeto-354/">
                     <font color="#e92187" type="submit">Voltar</font>
                  </a>
               </form>
               <form class="d-flex">
               </form>
            </div>
         </div>
      </nav>
   </header>
   <div class="d-flex flex-column p-3 text-white bg-dark" style="position: absolute;flex-shrink: 0;top: -5px;width: 272px;height: 100%;">
      <a href="/" class="d-flex align-items-center mb-3 mt-5 mb-md-0 me-md-auto text-white text-decoration-none">
         <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
         </svg>
         <span class="fs-4 mt-4">Dados</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
         <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
               <svg class="bi me-2" width="16" height="16" href="editarpessoa.php"></svg> Editar Pessoa </a>
         </li>
         <li>
            <a href="#" class="nav-link text-white">
               <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#speedometer2"></use>
               </svg> Editar Usuário </a>
         </li>
         <li>
            <a href="#" class="nav-link text-white">
               <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#table"></use>
               </svg> Carrinho </a>
         </li>
         <li>
            <a href="logout.php" class="nav-link text-white">
               <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#grid"></use>
               </svg> Logout </a>
         </li>
      </ul>
      <hr>
      <div class="dropdown">
         <strong><?=$_SESSION['usuario_nome']?></strong>
      </div>
   </div>
</body>
</html>