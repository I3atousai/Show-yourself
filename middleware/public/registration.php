<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
session_start();
use App\Model\Resume;
use App\Model\User;
use App\Helpers\Navigate;
use App\Service\Guard;

// Валидация
Guard::only_guest();


if(User::query( get: ['*'], params: [['email', '=', $_POST['email'], 'value',],]))
{
    echo "Не удалось добавить пользователя, или такой пользователь уже существует\nUnable to add user/User already exists";
} else {
    $_POST['password_hash'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    unset($_POST['password']);
    $to_add = ["name" => $_POST['name'],
                            "email" => $_POST['email'],
                            "password_hash" => $_POST['password_hash'],
                            "phone" => $_POST['phone'],
                            "resumes_left" => 4];

    if(isset($_SESSION['avatar'])){
        $to_add['avatar'] = $_SESSION['avatar'];
    }
    
    $add = User::add($to_add, mode:'id');

    if(isset($_POST['resume'])){
        $_POST['id_user'] = $add;
            $add_res = Resume::add([
                'style' => $_POST['style'],
                'html' => $_POST['resume'],
                'id_user' => $add
            ]);
    }
    
    if ($add) { 
        Navigate::view("public/login", [], "redirect");
    } else {
        echo "Не удалось добавить пользователя, или такой пользователь уже существует\nUnable to add user/User already exists";
    }
}

