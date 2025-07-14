<?php 
session_start();
require('../inc/fonction.php');
if (isset($_GET['categorie'])) {
    $categorie = $_GET['categorie'];
    $objets = filtrer($categorie);
} else {
    $objets = get_object(); 
}
$email = $_SESSION['email'];
$membre = get_loged_membre($email);

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
<header>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../inc/logout.php">Deconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<header class="container my-4">
    <h2 class="text-center">Bienvenue, <?php echo $membre['nom'] ?> !</h2> <br><br>
    <h4 class="text-center">Liste des objets</h4>
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
<p>
    <a class="btn btn-primary" href="addimage.php" role="button">Add new object</a>
</p>
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
            <img src="../assets/images/<?= $objet['nom_image'] ?>" alt="<?= $objet['nom_objet']?>" class="card-img-top" style="height:150px; object-fit:cover;">
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
