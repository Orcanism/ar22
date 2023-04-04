<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // r�cup�re les donn�es du formulaire
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // effectue les actions appropri�es, comme envoyer un e-mail ou enregistrer les donn�es dans une base de donn�es

  // envoie une r�ponse au client
  echo "Merci pour votre message, $name. Nous vous contacterons bient�t � l'adresse $email.";
} else {
  // si la requ�te n'est pas une m�thode POST, renvoie une erreur
  http_response_code(405);
  echo "M�thode non autoris�e.";
}
?>