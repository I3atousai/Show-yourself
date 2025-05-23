<?php
namespace App\Controller;

use App\Service\TranslationFiles;
session_start();
class ChoiceController extends ControllerBase
{
    public static function index(): array
    {
        $files = self::get_files();
        array_push($files['head']['css'], 'choice');
        return [
            ...$files,
            'text' => TranslationFiles::set_choice_text(),
        ];
    }
}



