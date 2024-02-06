<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libStat = ctrlSaisies($_POST['libStat']);
$numStat = ctrlSaisies($_POST['numStat']);
$attributs = 'libStat =  "'. $libStat .'"';
$where = 'numStat = ' . $numStat;

sql_update('STATUT', $attributs, $where);

header('Location: ../../views/backend/statuts/list.php');