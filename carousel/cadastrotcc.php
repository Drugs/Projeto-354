<?php
$servidor ='localhost';
	$usuario ='root'; 
	$senha = '';
	$banco = 'banco';

	$mysql = mysqli_connect($servidor, $usuario, $senha, $banco);

	//já conectou, se tudo estiver certo.

	// teste de conexão
	if (!$mysql) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
if(isset($_GET) and $_GET != null){
	var_dump($_GET);
	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$cpf  = $_GET['cpf'];
    $senha = base64_encode($_GET['senha']);
	
	$insert_pessoa = "INSERT INTO pessoa (nome, email, cpf) values ('$nome' , '$email' , '$cpf')";
	$query = mysqli_query($mysql , $insert_pessoa);
	$last_id = mysqli_insert_id($mysql);
	$insert_usuario = "INSERT INTO usuario( email, senha, fk_id_pessoa) VALUES ('$email','$senha','$last_id')";
	$query = mysqli_query($mysql , $insert_usuario);
	
	header('Location: login.php?erro=O Cadastro foi realizado!!!');
	
	
	
}

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link href="cadastrocss.css" rel="stylesheet">
</head>
<body>
<div id="cadastro">
        <form method="post" action=""> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu nome<br/></label>
            <input id="nome_cad" class="form-control mb-3" type="text" name="nome" required="required" placeholder="Careca Careca" />
          </p>
           
          <p> 
            <label for="email_cad">Seu e-mail<br/></label>
            <input id="email_cad" class="form-control mb-3" type="email" name="email" required="required" placeholder="contato@gmail.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha<br/></label> 
            <input id="senha_cad" class="form-control mb-3" type="password" name="senha" required="required placeholder=Ex: 123"/>
          </p>
		  
		    <p> 
            <label for="cpf_cad">Cpf<br/></label>
            <input id="cpf_cad" class="form-control mb-3" type="text" name="cpf" required="required" placeholder="000.000.008-00" />
          </p>
		  
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="#Bota seu login aqui Luís"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>
