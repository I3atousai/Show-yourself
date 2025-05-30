<?php
namespace App\Controller;

use App\Service\Guard;
use App\Service\TranslationFiles;

class LoginController extends ControllerBase
{
    public static function index(): array
    {
        Guard::only_guest();
        $files = self::get_files();
        array_push($files['head']['css'], 'login');
        return [
            ...$files,
            'text' => TranslationFiles::set_login_text(),
        ];
    }
}



