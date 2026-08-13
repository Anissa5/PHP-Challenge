 <?php

$nom = $_POST['user_lastname'];
$prenom = $_POST['user_firstname'];
$mail = $_POST['user_email'];
$phone = $_POST['user_phone'];
$sujet = $_POST['sujet'];
$message = $_POST['user_message'];

echo "Merci $prenom $nom de nous avoir contacté à propos de $sujet. <br>";
echo "Un de nos conseillers vous contactera soit à l'adresse $mail ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : <br> 
$message."

?>
