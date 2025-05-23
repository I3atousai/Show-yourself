<?php
namespace App\Controller;


use App\Controller\ControllerBase;
use App\Service\TranslationFiles;
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
session_start();
class IndexController extends ControllerBase
{
    public static function index(): array
    {
        $files = self::get_files();
        array_push($files['head']['css'], 'index');
        array_push($files['foot']['js'], 'index');
        // array_push($files['foot']['service'], 'public');
        
        
        return [
            ...$files,
            'text' => TranslationFiles::set_index_text(),
        ];
    }
}



