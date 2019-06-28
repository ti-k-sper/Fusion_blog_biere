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

    public function purchaseOrder()
    {
        $beerArray = $this->beer->all();
        $user = $_SESSION['auth'];        
        $tva = 1.2;
        $title = 'Beer shop - Purchase order';
        return $this->render(
            'orders/purchaseOrder',
            [
                "title" => $title,
                "beerArray" => $beerArray,
                "user" => $user,
                "tva" => $tva
            ]
        );
    }
    //calculPrice
    public function confirmOrder()
    {
        
        $title = 'Beer shop - Confirm order';
        return $this->render(
            'orders/confirmOrder',
            [
                "title" => $title,
                "beerArray" => $beerArray,
                "user" => $user,
                "tva" => $tva
            ]
        );
    }
}