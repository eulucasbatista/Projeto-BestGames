<?php

    include("topo.php");

    


	if(isset($_POST['entrar'])){
		
		require_once("Usuario.php");
		$usuario = new Usuario();
		
		$usuario->setEmail($_POST['email']); 
		$usuario->setSenha($_POST['senha']);  

		if($usuario->logar()){
			session_start();
			header('location:index.php?Logado');
		}else{
				echo "<h3> Credenciais incorretas </h3> <br> " . mysql_error(); 
		}
	}else{
		echo "chegou nao";
	}
?>