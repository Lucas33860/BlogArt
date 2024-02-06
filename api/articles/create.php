<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = ctrlSaisies($_POST['numArt']);


sql_insert('ARTICLE', 'numArt', "'$numArt'");
sql_insert('ARTICLE', 'dtCreaArt', "'$dtCreaArt'");
sql_insert('ARTICLE', 'dtMajArt', "'$dtMajArt'");
sql_insert('ARTICLE', 'libTitrArt', "'$libTitrArt'");
sql_insert('ARTICLE', 'libChapoArt', "'$libChapoArt'");
sql_insert('ARTICLE', 'parag1Art', "'$parag1Art'");
sql_insert('ARTICLE', 'libSs1Titr1Art', "'$libSs1Titr1Art'");
sql_insert('ARTICLE', 'parag2Art', "'$parag2Art'");
sql_insert('ARTICLE', 'libSs2Titr2Art', "'$libSs2Titr2Art'");
sql_insert('ARTICLE', 'parag3Art', "'$parag3Art'");
sql_insert('ARTICLE', 'libSs3Titr3Art', "'$libSs3Titr3Art'");
sql_insert('ARTICLE', 'libConclArt', "'$libConclArt'");
sql_insert('ARTICLE', 'urlPhotArt', "'$urlPhotArt'");
sql_insert('ARTICLE', 'libThem', "'$libThem'");




header('Location: ../../views/backend/articles/list.php');
