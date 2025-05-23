<?php

namespace App\Service;

use App\Helpers\Navigate;
session_start();

class Guard
{
    public static function only_guest()
    {
        if (isset($_SESSION['auth']) )
            if ($_SESSION['auth']['role'] == 'user' || $_SESSION['auth']['role'] =='guide') {
                Navigate::view("users/profile?id=".$_SESSION['auth']['id'], [], "redirect");
            } else {
                Navigate::view("admin/panel", mode:"redirect");
            }
    }
    public static function only_user()
    {
        if (!isset($_SESSION['auth'])) {
            Navigate::view("public/login", [], "redirect");
        }
        if (isset($_SESSION['auth']) && ( $_SESSION['auth']['role'] == 'admin')) {
            Navigate::view("admin/panel", mode: "redirect");
        }
    }

    public static function only_user_api()
    {
        if (!isset($_SESSION['auth']) && ($_SESSION['auth']['role'] != 'user' || $_SESSION['auth']['role'] !='guide' || $_SESSION['auth']['role'] !='admin')) {
            http_response_code(401);
            echo json_encode(['error' => 'Unauthorized']);
            die();
        }
    }

    public static function only_admin()
    {
        if (!isset($_SESSION['auth'])) {
            Navigate::view("public/login", [], "redirect");
        } 
        if (isset($_SESSION['auth']) && ( $_SESSION['auth']['role'] != 'admin')) {
            Navigate::view("users/profile?id=".$_SESSION['auth']['id'], mode: "redirect");
        }
    }
}
