<?php
namespace App\Controller;


use App\Controller\ControllerBase;
use App\Model\User;
use App\Service\TranslationFiles;
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
session_start();
class IndexController extends ControllerBase
{
    public static function index(): array
    {
        $user = [];
        if (isset($_SESSION['auth'])){
            $user = User::get_one($_SESSION['auth']['id']);
        }
        $files = self::get_files();
        array_push($files['head']['css'], 'index');
        array_push($files['foot']['js'], 'index');
        array_push($files['foot']['js'], 'save_inputs');
        
        
        return [
            ...$files,
            'user' => $user,
            'text' => TranslationFiles::set_index_text(),
        ];
    }
}



