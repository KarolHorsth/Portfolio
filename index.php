<?php

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$number = addslashes($_POST['number']);
$message = addslashes($_POST['message']);

$to = "karolhramos@gmail.com";
$subject = "Get in touch - Portfolio";

$body = "Name: " . $nome . "\n" . "Email: " . $email . "\n" . "Number: " . $number . "\n" . "Message" . $message;

$header = "From: teste@gmh.com" . "\n" . "Reply-to" . $email . "\n" . "X=Mailer:PHP/" . phpversion();
if (mail($to, $subject, $body, $header)) {
  echo ("E-mail enviado com sucesso!");
} else {
  echo ("Houve um erro.");
}
