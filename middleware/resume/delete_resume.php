<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
use App\Service\Guard;
use App\Model\Resume;


Guard::only_user();

$data = $_POST;

$delete = Resume::delete([
    ['id', '=', $data['id'], 'value', 'AND'],
    ['id_user', '=', $_SESSION['auth']['id'], 'value'],
]);

if (!$delete) {
    die("Resume не удален");
}

http_response_code(200);
echo json_encode([
    'message' => "Резюме успешно удалено",
]);