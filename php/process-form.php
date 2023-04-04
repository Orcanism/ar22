<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // récupère les données du formulaire
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "cyrilsimonodu67@gmail.com";
  $from = "expediteur@example.com";
  $headers = "From: $from\r\nReply-To: $email\r\n";
  $body = "Nom: $name\nE-mail: $email\nSujet: $subject\nMessage:\n$message";
  mail($to, $subject, $body, $headers);

  // envoie une réponse au client
  echo "Merci pour votre message, $name. Nous vous contacterons bientôt à l'adresse $email.";
} else {
  // si la requête n'est pas une méthode POST, renvoie une erreur
  http_response_code(405);
  echo "Méthode non autorisée.";
}
?>