<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page utilisateur</title>
</head>
<body>

<h1>Ajouter des utilisateurs</h1>

<?php if (isset($errors) && !empty($errors)) : ?>
    <?php foreach ($errors as $error) : ?>
        <p><?php echo $error; ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form method="POST">
    <input type="text" name="firstname" placeholder="firstname">
    <input type="text" name="lastname" placeholder="lastname">
    <button type="submit">Valider</button>
</form>
<a href="/user">Retour à la liste</a>
</body>
</html>