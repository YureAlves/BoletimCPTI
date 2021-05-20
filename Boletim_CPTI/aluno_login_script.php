<?php
	session_start();

	include "aluno_conexao_script.php";

	if(empty($_POST['cpf']) || empty($_POST['senha'])){
		header('Location: aluno_login.php');
	}

	$cpf = mysqli_real_escape_string($conexao,$_POST['cpf']);
	$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
  
	$result = mysqli_query($conexao,$login);

	$linha = mysqli_fetch_assoc($result);

	$row = mysqli_num_rows($result);

	if($row == 1){
		$_SESSION['cpf'] = $cpf;
		$_SESSION['nome'] = $linha['nome'];
    $_SESSION['rge'] = $linha['rge'];
		header('Location: aluno_boletim.php');
	}else{
		$_SESSION['nao_autenticado'] = true;
		header('Location: aluno_login.php');
	}
?>