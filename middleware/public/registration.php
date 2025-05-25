<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
session_start();
use App\Model\User;
use App\Helpers\Navigate;
use App\Service\Guard;

// Валидация
Guard::only_guest();
if(isset($_SESSION['avatar'])){
    $_POST['avatar'] = $_SESSION['avatar'];
}

$_POST['password_hash'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
unset($_POST['password']);

$add = User::add($_POST);


if ($add) { 
    Navigate::view("public/login", [], "redirect");
} else {
    echo "Не удалось добавить пользователя, или такой пользователь уже существует\nUnable to add user/User already exists";
}
