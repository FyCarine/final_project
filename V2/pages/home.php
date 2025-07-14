<?php 
require('../inc/fonction.php');
if (isset($_GET['categorie'])) {
    $categorie = $_GET['categorie'];
    $objets = filtrer($categorie);
} else {
    $objets = get_object(); 
}

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
<form method="GET" action="home.php" class="my-4">
    <div class="input-group mb-3">
        <label class="input-group-text" for="categorie">Catégorie</label>
        <select name="categorie" id="categorie" class="form-select">
            <option value="">-- Toutes --</option>
            <option value="esthetique">Esthetique</option>
            <option value="bricolage">Bricolage</option>
            <option value="mecanique">Mecanique</option>
            <option value="cuisine">Cuisine</option>
        </select>
        <button type="submit" class="btn btn-primary">Filtrer</button>
    </div>
</form>
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
            <a href="../pages/fiche.php?obj=<?=$objet['id_objet']?>&cat=<?=$objet['id_categorie']?>">
            <img src="../assets/image/<?= $objet['nom_image']?>.jpg" alt="<?= $objet['nom_objet']?>" class="card-img-top" style="height:150px; object-fit:cover;"></a>
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
