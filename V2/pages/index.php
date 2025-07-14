<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
</header>
<main>
<div class="container-sm cont">
<form action="../traitement/traitement_login.php" method="post">
                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error">Email ou mot de passe incorect</p>
                    <?php } ?>
                    <p>Email : <input type="text" name="email" value="magi@gmail.com"></p>
                    <p>Mot de passe : <input type="password" name="mdp" value="magi123"></p>
                    <p><input type="submit" value="Se connecter"></p>
                </form>
                <p>Vous n'avez pas de compte ? <a href="inscription.php" class="inscri">S'inscrire</a></p>
</div>
</main>
</body>
</html>