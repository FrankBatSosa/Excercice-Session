<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
<h1>Bienvenue</h1>
    <?php
    if (isset($_SESSION['username'])) {
        
        $username = $_SESSION['username'];
        echo "<p>Bienvenue, $username ! Vous êtes connecté avec succès.</p>";}
    ?>
</body>
</html>