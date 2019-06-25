<?php
namespace App\Controller;

use \Core\Controller\Controller;

class ShopHomeController extends Controller
{

    public function __construct()
    {
        //$this->loadModel('shopHome');
    }

    public function home()
    {
        $title = 'Beer shop';
        $this->render(
            'shopHome/home',
            [
                "title" => $title,
                "connect" => false
            ]
        );
    }
}