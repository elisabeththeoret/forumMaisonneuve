<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Maisonneuve | TP02</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>
<body>
    <?php if(isset($_SESSION["id"]) && $_SESSION["id"] != null){ ?>

    <nav class="navigation">
        <div class="liens-nav">
            <a href="?module=forum&action=index">Accueil</a>
            <a href="index.php?module=user&action=index">Mes articles</a>
        </div>
        <div class="boutons-nav">
            <a href="?module=user&action=logout" class="bouton-nav">Se déconnecter</a>
        </div>
    </nav><!-- /nav navigation -->
    <header>
        <h2>Bonjour <?= $_SESSION["nom"] ?>!</h2>
    </header>

    <?php } else{ ?>

    <nav class="navigation">
        <div class="liens-nav">
            <a href="?module=forum&action=index">Accueil</a>
        </div>
        <div class="boutons-nav">
            <a href="?module=user&action=create">Créer un compte</a>
            <a href="?module=user&action=login" class="bouton-nav">Se connecter</a>
        </div>
    </nav><!-- /nav navigation -->
    <header>
        <h2>Bienvenue sur le Forum Maisonneuve!</h2>
    </header>

    <?php } ?>

    <main class="container">
        <?php echo $content; ?>
    </main>

    <footer>
        <small>&copy; Collège Maisonneuve, 2022 | Tous droits réservés</small>
    </footer>
</body>
</html>

