<?php
/*
* Page qui appelle la vue pour la gestion des articles
*/
session_start();
include '../inc/fonctions.php';
//(isAdminLogin()) ?: redirectUrl('view/404.php');
$limit = 10;
$offset = 0;

require '../view/adminImmo/index.view.php';
