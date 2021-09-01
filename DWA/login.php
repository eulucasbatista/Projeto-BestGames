<?php

	if(isset($_POST['login'])){
		
		require_once("Usuario.php");
		$usuario = new Usuario();
		
		$usuario->setEmail($_POST['username']); 
		$usuario->setPassword($_POST['password']);  

		if($usuario->logar()){
			session_start();
			header('location:escreva.php?Logado');
		}else{
				echo "<h3> Credenciais incorretas </h3> <br> " . mysql_error(); 
		}
	}else{
		echo "chegou nao";
	}
?>