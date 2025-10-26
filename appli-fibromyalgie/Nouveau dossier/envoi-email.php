<?php
$destinataire = "tonadresse@example.com"; // Ton adresse pour recevoir l'alerte
$expediteur = $_POST['email'];
$sujet = "Nouvelle inscription";
$message = "Une nouvelle personne s'est inscrite avec l'adresse : " . $expediteur;

mail($destinataire, $sujet, $message);
echo "Merci pour ton inscription !";
?>
mail($expediteur, "Bienvenue dans ton espace doux", "Merci pour ton inscription !");
