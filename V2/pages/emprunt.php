<?php
require('../inc/fonction.php');
$date = get_emprunt_en_cours($_GET['id'], $_GET['cat']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <header>

    </header>
    <main>
    <div class="container-sm cont">
    <h3 class="mb-4 text-center">Emprunter un objet</h3>
    <form action="../traitement/traitement_emprunt.php" method="post">
        <input type="hidden" name="employe" value="<?php echo $employe;?>">
      </p>
      </select>
      <p>
      <span class="h6">Date de début : </span>
      <span><input type="date" name="debut" id=""></span>
      </p>
      <input type="submit" value="Valider">
      </form>
      <br>
      <span class="h6">Objet disponible seulement le : </span>
      <span><?= $date['date_retour'] ?></span>
      <a class="btn btn-danger" href="home.php">Retour</a>
    </div>
    </div>
</div>
    </main>
</body>
</html>