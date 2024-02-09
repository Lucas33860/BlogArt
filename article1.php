<?php

require_once 'header.php';

$numArt = $_GET["numArt"];
$article = sql_select("ARTICLE", "*", "numArt = $numArt");

$dtCreaArt = $article[0]["dtCreaArt"];
$dtMajArt = $article[0]["dtMajArt"];
$libTitrArt = $article[0]["libTitrArt"];
$libChapoArt = $article[0]["libChapoArt"];
$libAccrochArt = $article[0]["libAccrochArt"];
$parag1Art = $article[0]["parag1Art"];
$libSsTitr1Art = $article[0]["libSsTitr1Art"];
$parag2Art = $article[0]["parag2Art"];
$libSsTitr2Art = $article[0]["libSsTitr2Art"];
$parag3Art = $article[0]["parag3Art"];
$libConclArt = $article[0]["libConclArt"];
$urlPhotArt = $article[0]["urlPhotArt"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article 1</title>
</head>

<body>

    <!-- je peux rajouter le chemin aussi mais je suis pas sure-->
    <div>
        <img src="/src/images/Cathedral2.webp" alt="Image cathédrale" width="1440px" height="270px"
            class="img_hautdepage">
        <!--est-ce qu'ici je met une balise php pour que l'image change à chaque article ? -->
    </div>

<!-- il manque aussi les sous titres jsp si c'est volontaire ?-->
    <section class="article1">
        <div class="container">
            <div class="titre">
                <h1 class ="T_art"> <!-- j'ai rajouté une class ST_art pour les sous-titres-->
                    <?php echo $libTitrArt; ?>
                </h1>
            </div>

            <div class="para1">
                <p>
                    <?php echo $libChapoArt; ?>
                </p>
            </div>
            <br>
            <div class="para2">
                <h2 class ="ST_art">
                    <?php echo $libAccrochArt; ?>
                </h2>
                <br>
                <p>
                    <?php echo $parag1Art; ?>
                </p>
            </div>
            <br>
            <div class="para3">
                <h2 class ="ST_art">
                    <?php echo $libSsTitr1Art; ?>
                </h2>
                <br>
                <div class="para_img">
                    <img src="src/images/Frr.webp" width="300" alt="photo de l'évènement" class = "img_art" >
                    <p>
                        <?php echo $parag2Art; ?>
                    </p>
                </div>
            </div>
            <br>
            <div class="para4">
                <h2 class ="ST_art">
                    <?php echo $libSsTitr2Art; ?>
                </h2>
                <br>
                <p>
                    <?php echo $parag3Art; ?>
                </p>

                <p>
                    <?php echo $libConclArt; ?>
                </p>
            </div>
        </div>
</body>

</html>

<?php require_once "footer.php" ?>