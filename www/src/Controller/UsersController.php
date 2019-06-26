<?php
namespace App\Controller;

use \Core\Controller\Controller;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->loadModel('users');
    }

    public function signUp()
    {
        $title = 'Beer shop - Sign up';
        $this->render(
            'users/signup',
            [
                "title" => $title,
                "connect" => false
            ]
        );
    }

    public function signIn()
    {
        $title = 'Beer shop - Sign in';
        $this->render(
            'users/signin',
            [
                "title" => $title,
                "connect" => false
            ]
        );
    }
}