<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$sql = sprintf($sql, $nom, $dtn, $genre, $email, $ville, $mdp, $image_profil);

    session_start();
    include("../inc/fonction.php");
    $nom = $_POST['nom'];
    $dtn = $_POST['dtn'];
    $genre = $_POST['genre'];
    $email = $_POST['email'];
    $ville = $_POST['ville'];
    $mdp = $_POST['mdp'];

    if(verify_inscription($email) > 0){
        header('Location: ../pages/index.php?error=0');
        exit;
    }
    $_SESSION['email'] = $email;
    if(verify_password($_POST['mdp'] ,$_POST['mdpbis']) == true){
        $mdp = $_POST['mdp'];
    }
    else{
        header('Location: ../pages/index.php?errormdp=0');
        exit;
    }
    $_SESSION['mdp'] = $mdp;
    add_new_member($nom, $dtn, $genre, $email, $ville, $mdp);
    header('Location: ../pages/index.php');
?>