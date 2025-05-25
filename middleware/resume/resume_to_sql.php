<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
session_start();
use App\Model\Resume;
use App\Helpers\Navigate;

// Валидация


$add = Resume::add($_POST);

if ($add) { 
    Navigate::view("public/login", [], "redirect");
} else {
    echo "Не удалось добавить резюме\nUnable to add resume";
}
