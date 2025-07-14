<?php
require('../inc/fonction.php');
$objet = intval($_GET['obj']);
$categorie = intval($_GET['cat']);
$fiche = get_one_objet($objet, $categorie);
$historique = get_historique_objet($objet, $categorie);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de l'objet</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-light">

<header class="bg-white p-4 mb-4 shadow-sm">
    <div class="container">
        <h2 class="mb-0"><?= $fiche[0]['nom_objet'] ?> <small class="text-muted">(<?= $fiche[0]['nom_categorie'] ?>)</small></h2>
    </div>
</header>

<main class="container">
    <?php foreach($historique as $ligne) { ?>
        <div class="card mb-4">
            <div class="card-body">
                <p>
                    <span class="fw-bold">Emprunteur :</span> 
                    <span><?= $ligne['emprunteur'] ?></span>
                </p>
                <p>
                    <span class="fw-bold">Email :</span> 
                    <span><?= $ligne['email'] ?></span>
                </p>
                <p>
                    <span class="fw-bold">Ville :</span> 
                    <span><?= $ligne['ville'] ?></span>
                </p>
                <p>
                    <span class="fw-bold">Nom de l'objet :</span> 
                    <span><?= $ligne['nom_objet'] ?></span>
                </p>
                <p>
                    <span class="fw-bold">Catégorie :</span> 
                    <span><?= $ligne['nom_categorie'] ?></span>
                </p>
                <p>
                    <span class="fw-bold">Date emprunt :</span> 
                    <span><?= $ligne['date_emprunt'] ?></span>
                </p>
                <p>
                    <span class="fw-bold">Date retour :</span> 
                    <span><?= $ligne['date_retour'] ?></span>
                </p>
                <div>
                    <?php if (!empty($ligne['nom_image'])): ?>
                        <img src="../assets/images/<?= $ligne['nom_image'] ?>" alt="Image" width="100" class="img-thumbnail">
                    <?php else: ?>
                        <em class="text-muted">Aucune image</em>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php } ?>
<a class="btn btn-danger" href="home.php">Retour</a>

</main>

</body>
</html>
