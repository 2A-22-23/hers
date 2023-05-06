<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\projet web\config.php';
require 'C:\xampp\htdocs\projet web\phpmailer\includes\PHPMailer.php';
require 'C:\xampp\htdocs\projet web\phpmailer\includes\SMTP.php';
require 'C:\xampp\htdocs\projet web\phpmailer\includes\Exception.php';







// Récupérer les informations de réservation à partir de la base de données
$sql = "SELECT * FROM reservation WHERE nom = nom";
$stmt = config::getConnexion()->prepare($sql);
$stmt->execute();
$row = $stmt->fetch();
$nom = $row["nom"];
$email = $row["email"];
$date = $row["date"];
$time= $row["time"];

// Créer et envoyer l'email
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure ="tls"; 
$mail->Port ="587";
$mail->Username ="messaoudinahla25@gmail.com";
$mail->Password = "eyqqglpdljbxsbmf";
$mail->Subject = "Reservation confirmee";
$mail->setFrom("messaoudinahla25@gmail.com");
$mail->Body = "Bonjour $nom ,Votre réservation pour le $date à $time a été confirmée.<br><br>Merci de votre confiance.<br><br>Cordialement,<br>L'équipe de réservation";
$mail->addAddress($email);

if($mail->send()){
    echo "Le message a été envoyé avec succès à $email";
} else {
    echo "Erreur lors de l'envoi du message";
}


?>
