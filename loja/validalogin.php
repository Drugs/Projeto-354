<?php
	include "../includes/conexao.php";
	$login = $_POST['email'];
	$senha = base64_encode($_POST['senha']);
	if($login != null and $senha != null){
		$select = "SELECT * FROM `usuario` WHERE email = '$login'"; 
		#echo $select;
		$query = mysqli_query($mysql, $select);
		$result = mysqli_fetch_assoc($query);
		
		if($result == null){
			$erro = 'Login não encontrado';
			echo $erro;
			#redireciona para o login
			header('Location: logintcc.php?erro='.$erro);
		}else{
			$bdlogin=$result['email'];
			$bdsenha=$result['senha'];
			if($bdsenha == $senha){
				header('Location: ../usuario/interno.php?id=' .$result['id_usuario']);
				//aqui vc acertou morô
			}else{
				$erro = 'Senha incorreta';
				echo $erro;
				header('Location: logintcc.php?erro='.$erro);
			}
		}
	}else{
		if($login == null){
			$erro = 'Digite o login';
			header('Location: logintcc.php?erro='.$erro);
		}else{
			$erro = 'Digite a senha';
			header('Location: logintcc.php?erro='.$erro);
		}
		
	}
	
?>