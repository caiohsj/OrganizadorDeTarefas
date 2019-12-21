<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Organizador de Tarefas</title>
    <link rel="stylesheet" href="<?= url('theme/css/style.css');?>">
    <link rel="stylesheet" href="<?= url('theme/css/bootstrap.min.css');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= url('theme/fontawesome/css/all.css');?>">
  </head>
  <body>
    <header id="cabecalho">
      <nav class="navbar navbar-dark bg-dark ">
        <h1 class="navbar-brand">
          <i class="fas fa-tasks"></i>
          Organizador de Tarefas
        </h1>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="far fa-calendar-plus fa-2x"></i></a>
          </li>
        </ul>
      </nav>
    </header>

    <main class="mt-4 container" id="principal">
      <div class="card-columns">
        
        <?= $v->section('content') ?>
        
      </div>
    </main>
  </body>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>

