<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
use App\Service\Guard;
use App\Model\Resume;


Guard::only_user();

$data = $_POST;


$upd = Resume::update(['style' => $data['style']], [['id', '=', $data['id'], 'value']]);
http_response_code(200);
echo json_encode([
    'message' => "значениe успешно обновилось",
]);