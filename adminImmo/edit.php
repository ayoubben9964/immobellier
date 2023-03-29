<?php
/*
* Mise à jour d'un article
*/
include '../inc/fonctions.php';

//(isGetIdValid()) ? $id = $_GET['id'] : error404();

$titreDb = getAnnonceById($id)['title'];
$contenuDb = getAnnonceById($id)['description'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
   
    $target_dir = "../uploads/";
    $imageName = $_FILES["image"]["name"];
    $target_file = $target_dir . basename($imageName);
    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

    $titre = cleanData($_POST['title']);
    
    if ($imageName):
        $image = "./uploads/".$imageName;
    else:
        $image = "";
    endif;

    $title = cleanData($_POST['titre']);
    $description = cleanData($_POST['description']);

    updateAnnonce($title, $description, $image, $id_user, $type, $price, $surface, $room, $id_annonce);
    header('Location: ./index.php');
    exit();
endif;

require '../view/adminImmo/edit.view.php';
