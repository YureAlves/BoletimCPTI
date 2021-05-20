<?php
	session_start();
	if(! $_SESSION['cpf']){
		header('Location: aluno_login.php');
	}
?>