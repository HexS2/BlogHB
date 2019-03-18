<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page utilisateur</title>
</head>
<body>

<h1>Liste des utilisateurs</h1>
<ul>
    <?php
    /** @var \App\Model\User[] $users */
    foreach ($users as $user) : ?>
        <li> <?php echo $user->getFirstName() . ' ' . $user->getLastName(); ?></li>
    <?php endforeach; ?>
</ul>
<a href="/user/create">Ajouter</a>
</body>
</html>