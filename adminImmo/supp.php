<?php
session_start();
/*
* Suppression d'un annonce
*/
include '../inc/fonctions.php';
//(isAdminLogin()) ?: redirectUrl('view/404.php');

$id = $_GET['id'];

if (suppAnnonceById($id)) :
   header('Location: ./index.php');
   exit();
else :
   exit('Erreur s\'est produite !');
endif;
