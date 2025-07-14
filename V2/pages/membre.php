<?php 
require('../inc/fonction.php');
session_start();
$email = $_SESSION['email'];
$membre = get_loged_membre($email);
$object = get_object_emprunt($membre);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php for ($i=0; $i < count($object) ; $i++) { 
        echo $object[$i]['nom_objet']; ?> <br>
        <img src="../assets/images/<?=$object['nom_image']?>" class="card-img-top" style="height:150px; object-fit:cover;"> 
        <br>
        <p>
    <a class="btn btn-primary" href="retour.php" role="button">Retourner</a>
</p>
    <?php }?>
</body>
</html>