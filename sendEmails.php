<?php
require 'vendor/autoload.php';
//require __DIR__ . './../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('trainreservationsl@gmail.com')
  ->setPassword('reservation123');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendOTPEmail($userEmail, $token)
{
  global $mailer;
  $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Test mail</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p> Your OTP is : </p>
        <h1>' . $token . '</h1>
      </div>
    </body>

    </html>';

  // Create a message
  $message = (new Swift_Message('Your OTP'))
    ->setFrom('trainreservationsl@gmail.com','Train Reservation')
    ->setTo($userEmail)
    ->setBody($body, 'text/html');

  // Send the message
  $result = $mailer->send($message);

  if ($result > 0) {
    return true;
  } else {
    return false;
  }
}
