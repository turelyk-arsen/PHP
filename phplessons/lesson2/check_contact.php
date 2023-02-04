<?php
session_start();
function redirect()
{
    header('Location: contact.php');
    exit;
}

unset($_SESSION['user_name']);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);

unset($_SESSION['error_username']);
unset($_SESSION['error_email']);
unset($_SESSION['error_message']);
unset($_SESSION['error_subject']);

unset($_SESSION['success_mail']);

$user_name = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['user_name'] = $user_name;
$_SESSION['email'] = $email;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;

if (strlen($user_name) <= 2) {
    $_SESSION['error_username'] = 'Input correct name.';
    redirect();
} else if (strlen($email) < 5 || strpos($email, '@') == false) {
    $_SESSION['error_email'] = 'Your email is wrong.';
    redirect();
} else if (strlen($subject) < 5) {
    $_SESSION['error_subject'] = 'Your subject is wrong.';
    redirect();
} else if (strlen($message) < 15) {
    $_SESSION['error_message'] = 'Your message is wrong.';
    redirect();
} else {
    $subject = '=?utf-8?B?'. base64_encode($subject) . '?=';
    $headers = 'From: $email\r\nReply-to: $email\r\nContent-type:text/plain; charset=urf-8\r\n';
    mail('turelyk.as@gmail.com', $subject, $message, $headers);
    $_SESSION['success_mail'] = 'You sent email succesfully!!!';
    redirect();
}
