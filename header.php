<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog'Art</title>

  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- Load CSS -->
  <link rel="stylesheet" href="src/css/style.css" />
  <link rel="stylesheet" href="src/css/reset.css" />
  <link rel="shortcut icon" type="image/x-icon" href="src/images/article.png" />
  <!-- Captcha -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<?php
//load config
require_once 'config.php';
?>


<?php
session_start();
?>

<body>
  <nav class="navbar navbar-expand-lg my-navbar ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="/src/images/LogoBlack.svg" alt="Logo" width="55" height="40" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../../../index.php">ACCUEIL</a>
          </li>
          <li class="nav-item">
          
            <a  class="nav-link active" aria-current="page" href="../../../#article">ARTICLES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../../../contact.php">CONTACT</a>
          </li>
          <?php 
          if (isset($_SESSION['logged']) && isset($_SESSION['numStat']) && $_SESSION['numStat'] == 1) {
            echo '<li class="nav-item">
              <a class="nav-link" href="/views/backend/dashboard.php">ADMIN</a>
            </li>';
          }
          ?>

        </ul>
      </div>
      <!--right align-->
      <div class="d-flex">
        <?php
        if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
          echo '<a class="btn m-1" href="/api/security/logout.php" role="button">Déconnexion</a>';
        } else {
          echo '<a class="btn m-1" href="/views/backend/security/login.php" role="button">Connexion</a>';
        }
        ?>
        <a class="btn m-1" href="/views/backend/security/signup.php" role="button">Inscription</a>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>