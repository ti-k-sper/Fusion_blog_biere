<?php
namespace App\Controller;

use \Core\Controller\Controller;

use \Core\Controller\Helpers\MailController;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->loadModel('orders');
        $this->loadModel('beer');
    }

    public function command()
    {
        $articles = $this->beer->all();
        //dd($articles);
        
        $tva = 1.2;
        $title = 'Beer shop - Purchase order';
        return $this->render(
            'orders/command',
            [
                "title" => $title,
                "articles" => $articles,
                "tva" => $tva
            ]
        );
    }
}