<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog'Art</title>

    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
        <!-- Load CSS -->
    <link rel="stylesheet" href="src/css/header.css"/>
    <link rel="stylesheet" href="src/css/reset.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="src/images/article.png" />

</head>
<?php
//load config
require_once 'config.php';
?>
<body>
<nav class="navbar navbar-expand-lg my-navbar ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="/src/images/LogoBlack.svg" alt="Logo" width="55" height="40" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">ACCUEIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/backend/dashboard.php">ARTICLES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">CONTACT</a>
        </li>
      </ul>
    </div>
    <!--right align-->
    <div class="d-flex">
      
      <a class="btn m-1" href="/views/backend/security/login.php" role="button">Connexion</a>
      <a class="btn m-1" href="/views/backend/security/signup.php" role="button">Inscription</a>
      <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Recherche"  aria-label="Search" >
      </form>
    </div>
  </div>
</nav>