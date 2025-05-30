<?php
namespace App\Controller;

use App\Service\TranslationFiles;

session_start();
use App\Controller\ControllerBase;
use App\Service\Guard;
use App\Model\Resume;
use App\Model\User;

class ProfileController extends ControllerBase
{
    public static function index(): array
    {
        Guard::only_user();
        $files = self::get_files();
        array_push($files['head']['css'], 'profile');
        array_push($files['foot']['js'], 'profile');
        $resumes = Resume::query(
            get: ["*"],
            fetch_mode: "all",
            params: [
                ['id_user', "=", $_SESSION['auth']['id'], 'value']
            ]
        );

        $user = User::get_one($_SESSION['auth']['id']);

        return [
            ...$files,
            "user" => $user,
            'resumes' => $resumes,
            'text' => TranslationFiles::set_profile_text(),

        ];
    }
}



