<?php 
require('../inc/fonction.php');
$objets = get_object();
$categories = get_categories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4 text-center">Ajouter un objet</h3>

        <form action="../traitement/traitement_publication.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="nom" class="form-label">Nom de l'objet :</label>
                <input type="text" name="nom_objet" id="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="categorie" class="form-label">Catégorie :</label>
                <select class="form-select" id="categorie" name="id_categorie" required>
                    <option value="">-- Choisissez une catégorie --</option>
                    <?php foreach($categories as $categorie) { ?>
                        <option value="<?= $categorie['id_categorie'] ?>">
                            <?= $categorie['nom_categorie'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="fichier" class="form-label">Sélectionnez des images :</label>
                <input type="file" id="fichier" name="fichier[]" class="form-control" accept="image/*" multiple>
            </div>

            <div class="text-center">
                <button type="submit" name="valider" class="btn btn-primary">Publier</button>
            </div>

        </form>
    </div>
</div>
</body>
</html>