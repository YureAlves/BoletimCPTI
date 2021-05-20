<?php
	session_start();
	session_destroy();
	header('Location: aluno_login.php');
?>
