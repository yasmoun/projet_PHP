<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <?php
session_start();

if (!isset($_GET['nom']) || !isset($_GET['prenom'])) {
    // Si les informations ne sont pas présentes, rediriger vers une autre page
    header('Location: login.html');
} ?>
</body>
</html>