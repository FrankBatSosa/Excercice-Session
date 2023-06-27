<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page sécurisée</title>
</head>
<body>
<h1>2ieme page</h1>
    <?php
    $username = $_POST['username'];
    echo "<p>Bienvenue, $username ! Vous êtes connecté avec succès.</p>";
    ?>
</body>
</html>