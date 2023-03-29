<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Edition annonce</title>
    <link rel="stylesheet" href="../assets/css/pico.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <main class="container">
        <h1>Mise à jour d'une annonce</h1>
        <form method="POST" class="form"  enctype="multipart/form-data">
            <div>
                <label for="title">Titre</label>
                <input type="title" name="title" id="title" value="<?= $titleDb ?>">
            </div>
            <div>
                <label for="description">description annonce</label>
                <textarea name="description" id="description"><?= $descriptionDb ?></textarea>
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <input type="submit" value="Valider">
                <a href="./"><button type="button">Annuler</button></a>
            </div>
        </form>
    </main>
</body>

</html>