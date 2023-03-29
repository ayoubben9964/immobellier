<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/pico.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <main class="container">
        <h1>Enregistrer un nouvel utilisateur</h1>
        <form method="POST" class="form">
            <div>
                <label for="first_name">First Name *</label>
                <input type="text" name="first_name" id="first_name" value="<?= $first_name ?>">
            </div>
            <div>
                <label for="last_name">Last Name *</label>
                <input type="text" name="last_name" id="last_name" value="<?= $last_name ?>">
            </div>
            <div>
                <label for="email">Email *</label>
                <input type="email" name="email" id="email" required value="<?= $email ?>">
            </div>
            <div>
                <label for="password">Password *</label>
                <input type="password" name="password" id="password" required value="<?= $password ?>">
            </div>
            <!-- <div>
                <label for="adress">Adress *</label>
                <input type="text" name="adress" id="adress" value="<?= $adress ?>">
            </div>

            <div>
                <label for="town">Town *</label>
                <input type="text" name="town" id="town" value="<?= $town ?>">
            </div>
            <div>
                <label for="postal_code">Postal Code *</label>
                <input type="text" name="postal_code" id="postal_code" value="<?= $postal_code ?>">
            </div>
            <div>
                <label for="phone">Phone *</label>
                <input type="text" name="phone" id="phone" value="<?= $phone ?>">
            </div> -->
            <div>
                <label for="role">Role</label>
                Redacteur <input type="radio" name="role" id="role" value="redacteur" checked> 
                Admin <input type="radio" name="role" id="role" value="admin">
            </div>
            <div>
                <input type="submit" value="Inscription">
            </div>
            <?php if (!empty($errors)) : ?>
                <div class="errors">
                    <ul class="errors">
                        <li><?= $errors ?></li>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
        <p>* Informations obligatoires</p>
    </main>
</body>

</html>
