<?php
require_once 'header.php';
sql_connect();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOGART Accueil</title>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="src/css/style.css" />
    <link rel="stylesheet" href="src/css/reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">


</head>

<body>
    <!-- 1e page -->
    <div class="container text-center titre">
        <div class="row">
            <div class="col logo">
                <img src="/src/images/LogoMemoriaBlack.svg" alt="Logo" width="786" height="184"
                    class="d-inline-block align-text-top">
                <h1 class="slogan">LES EGLISES AUTREMENT</h1>
            </div>
            <div class="col img_accueil">
                <img src="/src/images/Vitrail.webp" alt="Image vitrail" width="482" height="667" class="img_vitrail">
                <div class="citation">
                Photo de <a href="https://unsplash.com/fr/@dre0316?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Andre Hunter</a> sur <a href="https://unsplash.com/fr/photos/bouteille-en-verre-bleu-et-marron-vqoKHmMKgOE?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
                </div>
                <div class="rond">
                </div>
            </div>
        </div>
    </div>


    <div>
        <div class="arrondi">
        </div>
        <div class="container2">
            <div class="row">
                <div class="col">
                </div>
                <div class="col">
                    <h2 class="titre_boite"> MEMORIA C'EST QUOI ?</h2>
                    <p class="p_boite">Lorem ipsum dolor sit amet consectetur. Leo cum vel neque <br>
                        lectus. Ultrices felis neque feugiat tellus hendrerit dolor <br>
                        ullamcorper cursus consequat. Venenatis diam hac sollicitudin <br>
                        diam nec quis. Consectetur enim magna amet gravida eget vivamus semper metus.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container3">
        <div class="ST text-center"> <!-- sous titre 1-->
            <h2> LES NEWS </h2>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col">
                <img src="/src/images/News1.webp" alt="Image" width="250" height="250" class="img_news">
                <h2 class="h_news">Le diocèse de Bordeaux se réorganise</h2>
                <p class="p_news">Face à la pénurie <br>
                    de prêtres et la crise <br>
                    de vocation.</p>
            </div>
            <div class="col">
                <img src="/src/images/News2.webp" alt="Image" width="250" height="250" class="img_news">
                <h2 class="h_news">La basilic Saint-Michel</h2>
                <p class="p_news">Classé au patrimoine <br>
                    mondiale de l’UNESCO,<br>
                    liée à son style <br>
                    gothique flamboyant.</p>
            </div>
            <div class="col">
                <img src="/src/images/News3.webp" alt="Image" width="250" height="250" class="img_news">
                <h2 class="h_news">Les murs de la Cathédrale Sainte André</h2>
                <p class="p_news">Le mariage d’Aliénor <br>
                    d’Aquitaine et de Louis VII, <br>
                    le futur roi de France <br>
                    puis cinq siècles. </p>
            </div>
        </div>
    </div>

    <div class="container4">
        <div class="ST text-center"> <!-- sous titre 2-->
            <h2>LES CHIFFRES CLÉS</h2>
        </div>
        <div class="row text-center">
            <div class="col chiffres">
                <div id="value">80</div>
                <p class="p_chifrres">chiffres</p>
            </div>
            <div class="col chiffres">
                <div id="value">1920</div>
                <p class="p_chifrres">chiffres</p>
            </div>
            <div class="col chiffres">
                <div id="value">65</div>
                <p class="p_chifrres">chiffres</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="ST text-center"> <!-- sous titre 3-->
            <h2 id="article">LES ARTICLES</h2>
        </div>
        <div class="articles">
            <div class="row text-center article1"> <!-- art 1-->
                <div class="col ">
                    <img src="/src/images/Bougies.webp" alt="Photos de plusieurs bougies dans le noir" width="590" height="323"
                        class="img_articles">
                </div>
                <div class="col text-end">
                    <h2 class="h_art">Saint Valentin - Un date à l'église: Y avez-vous pensé ?</h2>
                    <p class="p_art date">Publié le JJ/MM/AAAA par Memoria</p>
                    <p class="p_art">Vous cherchez une activité originale à Bordeaux <br>
                        pour la Saint Valentin ? Et si vous osiez sortir des <br>
                        clichés habituels, pour rendre ce moment unique <br>
                        et inoubliable avec votre moitié.</p>
                    <a class="btn m-1" href="article1.php?numArt=1" role="button">En savoir plus</a>
                </div>
            </div>
            <div class="row text-center article2"> <!-- art 2-->
                <div class="col text-start">
                    <h2 class="h_art">Les 3 secrets des moines dominicains révélés</h2>
                    <p class="p_art date">Publié le JJ/MM/AAAA par Memoria</p>
                    <p class="p_art">Aujourd'hui le frère Timothée Lagabrielle nous <br>
                        dévoile les secrets qui habitent le couvent de <br>
                        Bordeaux. Mais qui sont réellement les dominicains ?</p>
                    <a class="btn m-1" href="article1.php?numArt=2" role="button">En savoir plus</a>
                </div>
                <div class="col">
                    <img src="/src/images/Frr.webp" alt="Photo du frère dominicain Timothée Lagabrielle" width="590" height="323"
                        class="img_articles">
                </div>
            </div>
        </div>
    </div>

    <div class="container5">
        <div class="row">
            <div class="col">
                <h2 class="titre_boite2">POURQUOI S'INTÉRESSER AUX ÉGLISES ?</h2>
                <p class="p_boite2">Lorem ipsum dolor sit amet consectetur. Leo cum vel neque <br>
                    lectus. Ultrices felis neque feugiat tellus hendrerit dolor <br>
                    ullamcorper cursus consequat. Venenatis diam hac sollicitudin <br>
                    diam nec quis. Consectetur enim magna amet gravida eget vivamus semper metus.</p>
            </div>
            <div class="col">
                <img src="/src/images/Images_Carrés.svg" alt="Petites images églises carrées" width="600" height="400">
                <div class="rond2">
                </div>
                <div class="rond3">
                </div>
            </div>
        </div>

        <div class="rond2">
        </div>
        <div class="rond3">
        </div>
    </div>
    <div class="container6">
        <div class="ST text-center"> <!-- sous titre 4-->
            <h2>LES ÉGLISES DE BORDEAUX</h2>
            <div id="carouselExampleFade" class="carousel slide carousel-fade carou">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/src/images/st-andré.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/src/images/St-seurin.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/src/images/ste-croix.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

</body>

</html>

<?php require_once "footer.php" ?>