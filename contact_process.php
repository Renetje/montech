<?php
$answer = $_POST['answer'];
$name = $_POST['name'];
$email = $_POST['mail'];
$message = $_POST['message'];

// No request or wrong capctha -> lets redirect them away
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<SCRIPT LANGUAGE="JavaScript"> window.alert("Blabla  ")</SCRIPT>';
    header('location: contact.php');
}
if($answer != '12'){
    echo '<SCRIPT LANGUAGE="JavaScript"> window.alert("Fout! het antwoord op de vraag is 12!  ")</SCRIPT>';
    header('location: contact.php');
}

if($answer == '12') {
    require 'lib/phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->SMTPDebug = 3;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'renetjejanssen@gmail.com';
    $mail->Password = 'Rj0869sj';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('renetjejanssen@gmail.com', 'Website Montech');
//$mail->addAddress('info@montechbenelux.nl');     // Add a recipient
//    $mail->addAddress('renetjejanssen@gmail.com');     // Add a recipient
    $mail->addAddress('r.p.m.janssen@home.nl');     // Add a recipient
    //$mail->addAddress($email);
   // $mail->addReplyTo($email);
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Een mail van '. $name;
    //$mail->Body = 'We kunnen hier HTML neerzetten of het netjes oplossen. Resource staat dan ergens anders'. \r\n . $message;
    $mail->Body = file_get_contents('templates/email/contact.tpl'). $message;
    $mail->AltBody = 'Uw mailprogramma ondersteund waarschijnlijk geen HTML. Open de e-mail in een programma dat HTML kan lezen.';


    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: <pre>' . $mail->ErrorInfo . '</pre>';
    } else {
        echo 'Message has been sent';
        echo '<SCRIPT LANGUAGE="JavaScript"> window.alert("Bericht verstuurd  ")</SCRIPT>';
        header('location: contact.php');

    }
}