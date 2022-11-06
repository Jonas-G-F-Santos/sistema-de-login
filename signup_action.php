<?php
require 'config.php';
require 'models/Auth.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$password_confirm = filter_input(INPUT_POST, 'password_confirm');


if($name && $email && $password && $password_confirm) {
       
    $auth = new Auth($pdo, $base);

    if($auth->emailExists($email) === false) {
        if($password === $password_confirm){
            $auth->registerUser($name, $email, $password);
            header("Location: ".$base);
            exit;
        }else {
            $_SESSION['flash'] = 'As senhas não são iguais.';
            header("Location: ".$base."/signup.php");
            exit;
        }
    }else {
        $_SESSION['flash'] = 'E-mail já cadastrado';
        header("Location: ".$base."/signup.php");
        exit;
    }
}
$_SESSION['flash'] = 'Campos não enviados.';
header("Location: ".$base."/signup.php");
exit;