<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // r�cup�re les donn�es du formulaire
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "cyrilsimonodu67@gmail.com";
  $from = "expediteur@example.com";
  $headers = "From: $from\r\nReply-To: $email\r\n";
  $body = "Nom: $name\nE-mail: $email\nSujet: $subject\nMessage:\n$message";
  mail($to, $subject, $body, $headers);

  // envoie une r�ponse au client
  echo "Merci pour votre message, $name. Nous vous contacterons bient�t � l'adresse $email.";
} else {
  // si la requ�te n'est pas une m�thode POST, renvoie une erreur
  http_response_code(405);
  echo "M�thode non autoris�e.";
}
?>