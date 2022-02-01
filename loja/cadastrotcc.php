<?php
include '../includes/conexao.php';
$title = 'Cadastro';

if(isset($_GET) and $_GET != null){
	var_dump($_GET);
	$email = $_GET['email'];
	$senha = $_GET['senha'];
	$nome = $_GET['nome'];
	$cpf  = $_GET['cpf'];
	$nascimento = $_GET['nascimento'];
	$cep  = $_GET['cep'];
	$telefone  = $_GET['telefone'];
	$endereço  = $_GET['endereço'];
	
	$insert_pessoa = "INSERT INTO pessoa (nome, cpf, nascimento, cep, telefone, endereço) values ('$email' , '$senha' , '$nome' , '$cpf' , '$nascimento'
	'$cep' , '$telefone' ,	'$endereço')";
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
	<title><?=$title?></title>
	<link href="../css/cadastrocss.css" rel="stylesheet">
</head>
<body>
<div id="cadastro">
        <form method="post" action=""> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome">Seu nome<br/></label>
            <input id="nome" class="form-control mb-3" type="text" name="nome" required="required" placeholder="Careca Careca" />
          </p>
           
          <p> 
            <label for="email">Seu e-mail<br/></label>
            <input id="email" class="form-control mb-3" type="email" name="email" required="required" placeholder="contato@gmail.com"/> 
          </p>
           
          <p> 
            <label for="senha">Sua senha<br/></label> 
            <input id="senha" class="form-control mb-3" type="password" name="senha" required="required placeholder=Ex: 123"/>
          </p>
		  
		    <p> 
            <label for="cpf">Cpf<br/></label>
            <input id="cpf" class="form-control mb-3" type="text" name="cpf" required="required" placeholder="000.000.008-00" />
          </p>
		  
		  <p> 
            <label for="nascimento">Data de Nascimento<br/></label>
            <input id="nascimento" class="form-control mb-3" type="date" name="nascimento" required="required"/>
          </p>
		  
		  <p> 
            <label for="cep">Cep<br/></label>
            <input id="cep" class="form-control mb-3" type="text" name="cep" required="required" placeholder="000.000.008-00" />
          </p>
		  
		  <p> 
            <label for="telefone">Número de Telefone<br/></label>
            <input id="telefone" class="form-control mb-3" type="text" name="telefone" required="required" placeholder="11984560978 " />
          </p>
		  
		  <p> 
            <label for="endereço">Endereço<br/></label>
            <input id="endereço" class="form-control mb-3" type="text" name="endereço" required="required" placeholder="Ex: Avenida Lins de Vasconcelos, 234; Avenida Paulista, 316, apartamento 13. " />
          </p>
		  
			
		  
		  
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="logintcc.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>
