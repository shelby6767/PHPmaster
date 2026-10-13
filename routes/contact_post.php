<?php

if(!validateCsrfToken($_POST['csrfToken'] ?? '')){
    addFlashMessage('error', 'Invalid CSRF token. Please try again.');
    redirect('/contact');
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($email) || empty($message) ){
    badRequest();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    badRequest('Invalid email address');
}

$inserted = insertMessage(
    connectDb(),
    name: $name, 
    email: $email, 
    message: $message
);

if($inserted){
    $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    addFlashMessage('success', "Thank you, $safeName, for your message!");
    redirect('/guestbook');
}

addFlashMessages('error','Could not store your message. Please try again later.');

redirect('/guestbook');