<?php

namespace App\Controllers;

use \Core\View;
use App\Models\User;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class LoginController extends \Core\Controller
{


    /**
     * Show the index page
     *
     * @return void
     */
    public function getLogin()
    {
        View::render('admin/login.php');
       
    }

    public function postLogin()
    {
        session_start();
        $user = new User();
        if (isset($_POST['email'])&&isset($_POST['password'])) {
            $user = $user->userLogin($_POST['email'], $_POST['password']);
            $_SESSION['user'] = $user;
            if (!$user) {
                View::render('admin/login.php');
            } else {
                header('location:admin/category/list');
            }
        }
       
    }

    public function getLogout()
    {
        View::render('admin/logout.php');
       
    }
}
