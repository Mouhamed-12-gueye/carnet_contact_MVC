<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
    <header><h1>Mon carnet de contact</h1></header>
<main>
    <div class="affiche">
        <h3>Liste des contacts</h3>
        <table>
            <tr>
                <th>NOM</th>
                <th>EMAIL</th>
                <th>TÉLÉPHONE</th>
                <th>ACTIONS</th>
            </tr>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?= htmlspecialchars($contact['nom']) ?></td>
                    <td><?= htmlspecialchars($contact['email']) ?></td>
                    <td><?= htmlspecialchars($contact['phone']) ?></td>
                    <td class="case">
                        <a href="index.php?action=edit&id=<?= $contact['id'] ?>" class="modif">Modifier</a> |
                        <a href="index.php?action=delete&id=<?= $contact['id'] ?>" class="sup">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="index.php?action=form" class="ajout">Ajouter un contact</a>
    </div>
</main>
</body>
</html>