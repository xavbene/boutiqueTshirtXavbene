<?php require_once('init.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/lux/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Boutique</a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarColor01" >
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASE ; ?>">Accueil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE . "front/article.php"; ?>">Articles</a>
        </li>        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">BACK OFFICE</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= BASE . "back/ajoutArticle.php" ;?>">Ajouter un Article</a>
            <a class="dropdown-item" href="<?= BASE . "back/gestionArticle.php" ;?>">Gérer les Articles</a>
          </div>
        </li>
      </ul>      
    </div>
  </div>
</nav>    
<?php if(isset($_SESSION['messages'])):
  foreach($_SESSION['messages'] as $type => $messages):
    foreach( $messages as $message):
      ?>
        <div class="text-center mx-auto alert alert-<?= $type ?>">
          <?=$message; ?>  
      </div>
      <?php
    endforeach;
  endforeach;
  unset($_SESSION['messages']);
endif;  ?>