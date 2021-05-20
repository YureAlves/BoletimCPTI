
<!DOCTYPE html>
<html>
<head>
  <title>Boletim Online - login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">

          <?php include('aluno_verifica_login.php');?>
          <h2>Olá, <?php echo $_SESSION['nome'];?></h2>
          <h2><a class="btn btn-primary" href="aluno_logout_script.php">Sair</a></h2>

        
    </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>