<?php
/*
* Ajout d'un article
*/
session_start();
include '../inc/fonctions.php';

(isUserLogin()) ?: redirectUrl('view/404.php');

$title = $description = $image = $type = $price = $surface = $room ='';

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    $target_dir = "../uploads/";
    $imageName = $_FILES["image"]["name"];
    $target_file = $target_dir . basename($imageName);
    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
    
    
    if ($imageName):
    $image = "./uploads/".$imageName;
    else:
        $image = "";
    endif;

    $title = cleanData($_POST['titre']);
    $description = cleanData($_POST['description']);
    $description = cleanData($_POST['description']);

    insertAnnonce($title, $description, $image, $id_user, $type, $price, $surface, $room, $id_annonce, $_SESSION['id_user']);

    if ($_SESSION['login'] === 'redacteur') :
        redirectUrl('../adminImmo/');
    else :
        redirectUrl('./adminImmo/');
    endif;
endif;

require '../view/adminImmo/ajout.view.php';
