<?php
namespace App\Controller;
use App\Service\Guard;
use App\Service\TranslationFiles;

class RegistrationController extends ControllerBase
{
    public static function index(): array
    {
        Guard::only_guest();
        
        $files = self::get_files();
        array_push($files['head']['css'], 'registration');
        return [
            ...$files,
            'text' => TranslationFiles::set_registration_text(),
        ];
    }
}



