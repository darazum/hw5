<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('testmailer123456@mail.ru')
    ->setPassword('gfhjkmlkzlp123')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['testmailer123456@mail.ru' => 'Dima'])
    ->setTo(['darazum@mail.ru'])
    ->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);