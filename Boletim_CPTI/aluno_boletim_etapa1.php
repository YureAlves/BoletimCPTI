<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" href="css/style.css" rel="stylesheet">
  <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
  <title>Boletim CPTI</title>
</head>

<body>
  <!-- ----------------------    Header   --------------------------- -->

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

      <div id="img">
        <img src="cptifaeterj.png" id="logo" >
      </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="aluno_boletim_home.php">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                Boletim
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="aluno_boletim_etapa1.php">1ª Etapa</a></li>
                <li><a class="dropdown-item" href="aluno_boletim_etapa1">2ª Etapa</a></li>
                <li><a class="dropdown-item" href="aluno_boletim_etapa1">3ª Etapa</a></li>
              </ul>

            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>

            <li><hr class="dropdown-divider"></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                Nome do Usuário (foto)
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="aluno_boletim_etapa1_sem1">Alterar Foto</a></li>
                <li><a class="dropdown-item" href="aluno_boletim_etapa1_sem2">Alterar Senha</a></li>
                <li><a class="dropdown-item" href="aluno_boletim_etapa1_sem3">Sair</a></li>
              </ul>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </header>
                <!-- ----------------------  Header  --------------------------- -->
                <table class="table table-hover" style="text-align:center   ">
                  <thead>
                <tr >
              <th scope="col"></th>
              <th scope="col">1º Bimestre</th>
              <th scope="col"></th>
              <th scope="col" style="border-right: solid 1px;"></th>
              <th scope="col">2º Bimestre</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th></th>
            </tr>
          
            <tr>
              <th scope="col" style="border-right: solid 1px;">Disciplina</th>
              <th scope="col">Nota 1</th>
              <th scope="col">Recuperação</th>
              <th scope="col" style="border-right: solid 1px;">Nota 2</th>
              <th scope="col">Nota 1</th>
              <th scope="col">Recuperação</th>
              <th scope="col">Nota 2</th>
              <th></th>
            </tr>
          </thead>
          <tr>
            <th scope='row' style="border-right: solid 1px;">LP 1</th>
              <td>ex</td>
              <td>ex</td>
              <td style="border-right: solid 1px;">ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>
                <a href='' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirmacao' onclick="">Contestar</a>
              </td>
          </tr>
          <tr>
            <th scope='row' style="border-right: solid 1px;">MD</th>
              <td>ex</td>
              <td>ex</td>
              <td style="border-right: solid 1px;">ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>
                <a href='' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirmacao' onclick="">Contestar</a>
              </td>
          </tr>
          <tr>
            <th scope='row' style="border-right: solid 1px;">APL 1</th>
              <td>ex</td>
              <td>ex</td>
              <td style="border-right: solid 1px;">ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>
                <a href='' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirmacao' onclick="">Contestar</a>
              </td>
          </tr>
          <tr>
            <th scope='row' style="border-right: solid 1px;">ST</th>
              <td>ex</td>
              <td>ex</td>
              <td style="border-right: solid 1px;">ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>
                <a href='' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirmacao' onclick="">Contestar</a>
              </td>
          </tr>
          <tr>
            <th scope='row' style="border-right: solid 1px;">MM</th>
              <td>ex</td>
              <td>ex</td>
              <td style="border-right: solid 1px;">ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>ex</td>
              <td>
                <a href='' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirmacao' onclick="">Contestar</a>
              </td>
          </tr>
        </TABLE>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>