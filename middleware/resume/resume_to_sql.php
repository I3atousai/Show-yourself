<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
session_start();
use App\Model\Resume;
use App\Model\User;
$user = User::get_one($_SESSION['auth']['id']);


$add_res = Resume::add([
    'style' => $_POST['style'],
    'html' => $_POST['html'],
    'id_user' => $_SESSION['auth']['id']
]);

$upd = User::update(['resumes_left' => $user['resumes_left'] -1], [['id', '=', $_SESSION['auth']['id'], 'value']]);
http_response_code(200);
echo json_encode([
    'message' => "значения успешно обновилось",
]);