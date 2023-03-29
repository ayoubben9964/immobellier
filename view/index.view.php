<?php
/*
 * Vue listant tous les annonce
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/pico.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Agence IMMOBILIER</title>
</head>

<body>
    <main class="container">
        <header class="header">
            <h1>Agence IMMOBILIER</h1>
            <p>
                <?php if (isUserLogin()) : ?>
                    <?php if ($_SESSION['login'] == "admin"): ?>
                        <a href="./adminImmo/" role="button">Admin</a>
                    <?php else: ?>
                        <a href="./adminImmo/ajout.php" role="button">Ajouter un annonce</a>
                    <?php endif ?>
                    <a href="./login/deconnexion.php" role="button">Se déconnecter</a>
                <?php else : ?>
                    <a href="./login/" role="button">Se connecter</a>
                    <a href="./register/" role="button">S'enregistrer</a>
                <?php endif ?>
            </p>
        </header>
        <section>
            <?php
            if (count(getAnnonceLimit($limit, $offset)) != 0) :
                foreach (getAnnonceLimit($limit, $offset) as $annonce) : ?>
                    <article>
                        <h4><?= $annonce['title'] ?></h4>
                        <?php if ($annonce['image'] != null) : ?>
                            <p><img src="<?= $annonce['image'] ?>"></p>
                        <?php endif; ?>
                        <p>Description: <?= $annonce['description'] ?>.</p>
                        <p>Surface: <?= $annonce['surface'] ?> m2.</p>
                        <p>Nombre des pièces: <?= $annonce['room'] ?>.</p>
                        <p>Type: <?= $annonce['type'] ?>.</p>
                        <p>Price: <?= $annonce['price'] ?> $.</p>
                        
                        <p><strong>Annonce crèe par</strong> : <?= $annonce['first_name'] ?> <?= strtoupper($annonce['last_name']) ?> </p>
                    </article>
            <?php
                endforeach;
            else :
                echo 'Aucun annonce de disponible.';
            endif;
            ?>
        </section>
    </main>
</body>

</html>