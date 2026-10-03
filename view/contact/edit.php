<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Carnet Contact</title>
</head>
<body>
    <header>
        <h1>Mon carnet de contact</h1>
    </header>
    <div class="add">
        <h3>Modifer le contact contact</h3>
        <?php if (!empty($errors)): ?>
            <ul class="error">
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form action="index.php?action=add" method="post">
            <input type="text" name="nom" placeholder="Nom complet" value="<?= htmlspecialchars($nom ?? '') ?>">
            <input type="text" name="email" placeholder="Email" value="<?= htmlspecialchars($email ?? '') ?>">
            <input type="text" name="phone" placeholder="Téléphone" value="<?= htmlspecialchars($phone ?? '') ?>">
            <button type="submit">Modifier</button>
            <button type="reset">Vider</button>
        </form>
        <a href="index.php?action=list" class="list">Voir la liste</a>
    </div>
    
</body>
</html>