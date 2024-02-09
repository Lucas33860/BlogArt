<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
require_once '../../functions/query/select.php';

$dtCreaArt = addslashes($_POST['dtCreaArt']);
$dtCreaArt = date('Y-m-d H:i:s');
$dtMajArt = date('Y-m-d H:i:s');
$libTitrArt = addslashes($_POST['libTitrArt']);
$libChapoArt = addslashes($_POST['libChapoArt']);
$libAccrochArt = addslashes($_POST['libAccrochArt']);
$parag1Art = addslashes($_POST['parag1Art']);
$libSsTitr1Art = addslashes($_POST['libSsTitr1Art']);
$parag2Art = isset($_POST['parag2Art']) ? addslashes($_POST['parag2Art']) : '';
$libSsTitr2Art = isset($_POST['libSsTitr2Art']) ? addslashes($_POST['libSsTitr2Art']) : '';
$parag3Art = isset($_POST['parag3Art']) ? addslashes($_POST['parag3Art']) : '';
$libConclArt = addslashes($_POST['libConclArt']);
$urlPhotArt = isset($_FILES['urlPhotArt']) ? $_FILES['urlPhotArt']['name'] : '';
$numThem = addslashes($_POST['numThem']);

if(isset($_FILES['urlPhotArt'])){
    $error = $_FILES['urlPhotArt']['error'];
    $tmpName = $_FILES['urlPhotArt']['tmp_name'];
    $size = $_FILES['urlPhotArt']['size'];

    if($error == 0){
        if($size < 10000000){
            list($width, $height) = getimagesize($tmpName);
            if($width <= 5000 && $height <= 5000){
                $nom_image = basename($_FILES['urlPhotArt']['name']);
                $destination = "../../src/uploads/" . $nom_image;
                move_uploaded_file($tmpName, $destination);
            }
        }   
    }
    
}

$attributs = "`dtCreaArt` , `dtMajArt` , `libTitrArt` , `libChapoArt` , `libAccrochArt` , `parag1Art` , `libSsTitr1Art` , `parag2Art` , `libSsTitr2Art` , `parag3Art` , `libConclArt` , `urlPhotArt` , `numThem`";
$valeurs = "'$dtCreaArt', '$dtMajArt', '$libTitrArt', '$libChapoArt', '$libAccrochArt', '$parag1Art', '$libSsTitr1Art', '$parag2Art', '$libSsTitr2Art', '$parag3Art', '$libConclArt', '$urlPhotArt', '$numThem'";
sql_insert('ARTICLE', $attributs, $valeurs);

header('Location: ../../views/backend/articles/list.php');
