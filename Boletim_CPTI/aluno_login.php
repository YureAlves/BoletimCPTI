<!DOCTYPE html>
<html>
<head>
  <?php session_start();?>
  <title>Boletim Online - login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">

    <div class="banner">
      
      <div class="title"> 
        <img src="cptifaeterj.png" width="100%" max-width="350px">
      </div>
      <?php
      if(isset($_SESSION['nao_autenticado'])):?>
      <div class="alert alert-danger" role="alert" style="text-align:center;">
           CPF ou Senha incorretos!!
      </div>
      <?php
        endif;
        unset($_SESSION['nao_autenticado']);
      ?>
      <div class="pannel">

        <div class="formulario">

          <form class="row g-3" method="post" action="aluno_login_script.php">

            <div class="row">
              <div class="col">

                <label>CPF</label>
                <input type="text" name="cpf" class="form-control" placeholder="123.456.789-01" aria-label="CPF" required>
              </div>
            </div>

            <div class="row">
              <div class="col">

                <label for="password" class="form-label"> Senha </label>
                <input type="password" class="form-control" placeholder="********" name="senha" required>

              </div>
            </div>

            <div class="row">
              <div class="col">
                <br>
                <button type="submit" class="btn btn-primary ">Entrar</button>

              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>