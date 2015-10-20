
<?php
// Définition du mot de passe
$password = 'generateur';

// Récupération du hash, on laisse le salt se générer automatiquement
$hash = crypt($password);
?>

