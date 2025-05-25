<?php

namespace App\Controller;
use App\Helpers\Navigate;
use App\Service\TranslationFiles;
class ControllerBase
{
    public static function get_params(array $required = []): array
    {
        
        foreach ($required as $key) {
            if (!isset($_GET[$key]) || $_GET[$key] == "") {
                Navigate::link("index.php", [], "redirect");
            }
        }
        return $_GET;
    }

    public static function get_files(): array
    {
        if (isset($_POST['language'])) {
            $_SESSION['language'] = $_POST['language'];
        }
        if (isset($_POST['mode'])) {
            $_SESSION['mode'] = $_POST['mode'];
        }
        if (isset($_SESSION['language'])) {
            TranslationFiles::$language = $_SESSION['language'];
        }
        $head = [
            'css' => ['reset'],
            'js' => [],
            'service' => []
        ];
        $foot = [
            'css' => [],
            'js' => [],
            'service' => ['public', 'file']
        ];
        
        return [
            'head' => $head,
            'foot' => $foot,
            'public_text' => TranslationFiles::set_public_text(),
        ];
    }

}