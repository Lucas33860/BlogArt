<?php
require_once 'header.php';
sql_connect();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Load CSS -->
    <link rel="stylesheet" href="src/css/style.css" />
    <link rel="stylesheet" href="src/css/reset.css" />
    <!-- Load JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <img src="/src/images/Cathedral2.webp" alt="Image cathédrale" width="1440px" height="270px"
            class="img_hautdepage">
    </div>

    <div class="le_chemin">
        <nav class="chemin">
            <ol>
                <li class="chemin1"><a href="accueil.php">Accueil</a></li>
                <li class="chemin1"><a href="contact.php">Contact</a></li>
            </ol>
        </nav>
    </div class="logo_memoria">
    <div class="text-end">
        <img src="/src/images/LogoMemoriaBlack.svg" alt="Logo" width="499" height="117">
    </div>

    <div class="titre_contact">
        <h2>
            Contact
        </h2>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col text-start contact">
                <h3 class="h3_contact">Adresse mail :</h2>
                    <p class="p_contact">dina.rakotonarivo@mmibordeaux.com</p>
                    <h3 class="h3_contact">Téléphone :</h2>
                        <p class="p_contact">06.70.73.80.21</p>
                        <h3 class="h3_contact">Adresse :</h2>
                            <p class="p_contact">1 rue Jacques Ellul 33400 Bordeaux</p>
            </div>
            <div class="col">
                <img src="/src/images/Carte.svg" alt="Carte montrant l'IUT Bordeaux Montaigne" class="carte">
            </div>
        </div>
    </div>




</body>

</html>

<?php require_once 'footer.php'; ?>