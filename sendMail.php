<?php

//Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$to = "contato@seuemail.com.br";

$subject = "Formulário de contato site";
$txt = "\n Nome: " . $name . "\r\n E-mail: " . $email . "\r\n Telefone: " . $number . "\r\n Mensagem:  " . $message;

$headers = "From: contato@seuemail.com.br" . "\r\n";

if ($email != NULL) {
  mail($to, $subject, $txt, $headers);
}

header("Location: ../index.html");
