<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
session_start();

$santa_email = $_POST['email'];
$user = $_POST['name'];
$password = $_POST['password'];

date_default_timezone_set('Russia/Moscow');

$subject = "Данные для входа";

$message = file_get_contents('./mail/mail_to_santa_first.html',TRUE);
$message .= $user;
$message .= file_get_contents('./mail/mail_to_santa_second.html',TRUE);
$message .= "login=" . $user . '<br> password=' . $password;
$message .= file_get_contents('./mail/mail_to_santa_fourth.html',TRUE);

$headers  = "From: " . "grinchsecret@gmail.com" . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
try {
    mail($santa_email, $subject , $message,$headers);
} catch (\Throwable $th) {
    echo $th->getMessage();
}

