<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
    <title>CLARACINE</title>
</head>
<?php include "cabecalho.php" ?>
<body>
<nav class="nav-extended pink lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
     </ul>
    </div>
    <div class="nav-header center">
       <h1>CLARACINE</h1>
      </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent pink">
        <li class="tab"><a href="active">Todos</a></li>
        <li class="tab"><a class="#test2" href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Cadastrar Filme</span>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="titulo" type="text"class="validate" require>
                        <label for="Titulo do Filme">Titulo do Filme</label>
                    </div>  
                </div>  
            </div>

            <div class="row">
                <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                    <label for="sinopse">Sinopse</label>
                    </div>
                </div>
                </form>
            </div>

            <div class="row">
                    <div class="input-field col s4">
                        <input id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                        <label for="nota">Nota</label>
                    </div>  
                </div>  
            </div>

            <div class="file-field input-field">
                <div class="btn pink lighten-3">
                    <span>Capa</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>

            <div class="card-action">
                <a href="#" class="waves-effect waves-light btn pink">Confirmar</a>
                <a class="btn waves-effect waves-light" href="index.php">Cancelar</a>
            </div>
        </div>
    </div>
  </div>