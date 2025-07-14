<?php 
require('../inc/fonction.php');
$objets = get_object();
$categorie_actuelle = "";
$compteur = 0; 
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
<header class="container my-4">
    <h1 class="text-center">Liste des objets</h1>
</header>

<main class="container">
<?php
foreach($objets as $objet){
    if ($categorie_actuelle != $objet['nom_categorie']){
        if($compteur > 0){ ?>
        </div> 
    <?php } ?>
        <h2 class="my-4"><?= $objet['nom_categorie'] ?></h2>
        <div class="row">
    <?php 
        $categorie_actuelle = $objet['nom_categorie'];
        $compteur = 0;
    }
    ?>

    <div class="col-md-2 mb-4">
        <div class="card h-100">
            <img src="../images/<?= $objet['nom_image'] ?>" alt="<?= $objet['nom_objet']?>" class="card-img-top" style="height:150px; object-fit:cover;">
            <div class="card-body p-2">
                <h6 class="card-title text-center mb-0"><?= $objet['nom_objet'] ?></h6>
            </div>
        </div>
    </div>

<?php 
    $compteur++;
} 
if($compteur > 0){ ?>
    </div> 
<?php } ?>
</main>

</body>
</html>
