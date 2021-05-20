<?php

	$server = "localhost";
	$user = "root";
	$pass = "root";
	$bd = "alunocpti";

	if ($conexao = mysqli_connect($server, $user, $pass, $bd) ){
		//echo "Conectado!";
	}else{
		//echo "Erro!";
	}

  $login = "SELECT rge,nome,cpf FROM aluno WHERE cpf = '$cpf' and senha = '$senha';";

  
?>