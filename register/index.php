<?php
/*
* Formulaire d'enregistrement d'un nouvel utilisateur
*/
session_start();

require '../inc/fonctions.php';

$first_name = $last_name = $email = $password = $errors = $adress = $town  = $postal_code  =  $phone =  $role = $created_at = $modified_at = ' ';

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    $first_name = cleanData($_POST['first_name']);
    $last_name = cleanData($_POST['last_name']);
    $email = cleanData($_POST['email']);
    $password = cleanData($_POST['password']);
    $role = cleanData($_POST['role']);
    // $adress = cleanData($_POST['adress']);
    // $postal_code = cleanData($_POST['postal_code']);
    // $phone = cleanData($_POST['phone']);



    if ($email && $password) :
       
        if (findEmail($email)) :
            $errors = 'Veuiller choisir une autre adresse email !';
        else :
            $lastIdUtilisateur = insertUser($last_name, $first_name, $email, $password, $adress, $town, $postal_code, $phone, $role, $created_at, $modified_at);
            $_SESSION['login'] = findEmail($email)['role'];

            $_SESSION['id_user'] = $lastIdUtilisateur;
            if($role === 'admin'):
               redirectUrl('./adminImmo/');
            else:
               redirectUrl('');
            endif;
        endif;
    else :
        $errors = 'Votre email ou mot de passe sont incorrect !';
    endif;
endif;

require '../view/register/index.view.php';
