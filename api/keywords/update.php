<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libMotCle = ctrlSaisies($_POST['libMotCle']);
$numMotCle = ctrlSaisies($_POST['numMotCle']);
$attributs = 'libMotCle =  "'. $libMotCle .'"';
$where = 'numMotCle = ' . $numMotCle;

sql_update('MOTCLE', $attributs, $where);

header('Location: ../../views/backend/keywords/list.php');