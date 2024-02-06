<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libThem = ctrlSaisies($_POST['libThem']);
$numThem = ctrlSaisies($_POST['numThem']);
$attributs = 'libThem =  "'. $libThem .'"';
$where = 'numThem = ' . $numThem;

sql_update('THEMATIQUE', $attributs, $where);

header('Location: ../../views/backend/thematiques/list.php');