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
    <title>Article 2</title>
</head>

<body>
        <section class="article1">
            <div class="container">
                <div class="titre">
                    <h1><?php echo $libTitrArt; ?></h1>
                </div>

                <div class="para1">
                    <p><?php echo $libChapoArt; ?></p>
                </div>
                <br>
                <div class="para2">
                    <h2><?php echo $libAccrochArt; ?></h2>
                    <br>
                    <p><?php echo $parag1Art; ?></p>
                </div>
                <br>
                <div class="para3">
                    <h2><?php echo $libSsTitr1Art; ?></h2>
                    <br>
                    <div class="para_img">
                        <img src="<?php echo "../../../src/uploads/" . $urlPhotArt; ?>" width="300" alt="photo de l'évènement">
                        <p><?php echo $parag2Art; ?></p>
                    </div>
                </div>
                <br>
                <div class="para4">
                    <h2><?php echo $libSsTitr2Art; ?></h2>
                    <br>
                    <p><?php echo $parag3Art; ?></p>

                    <p><?php echo $libConclArt; ?></p>
                </div>
    </body>

</html>
<?php require_once "footer.php" ?>