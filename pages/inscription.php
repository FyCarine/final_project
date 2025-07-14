<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="recherche.php">Search</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
    
    <main>
    <form action="../traitement/traitement_inscription.php" method="post">
                    <p>Nom : <input type="text" name="nom"></p>
                    <p>Date de naissance : <input type="date" name="ddns"></p>
                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error">Votre email a déjà été utilisé</p>
                    <?php } ?>
                    <p>Email : <input type="text" name="email"></p>
                    <p>Mot de passe : <input type="password" name="mdp"></p>
                    <?php if(isset($_GET['errormdp'])) { ?>
                        <p>Veillez confirmer votre mot de passe</p>
                    <?php } ?>
                    <p>Confirmer mot de passe : <input type="password" name="mdpbis"></p>
                    <p><input type="submit" value="S'inscrire"></p>
                </form>
                <p>Vous avez déjà un compte ? <a href="index.php" class="inscri">Se connecter</a></p>
    </main>
</body>
</html>