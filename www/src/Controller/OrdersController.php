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

        if (empty($_POST)) {
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

        if(isset($_POST)  && !empty($_POST)) {
            $auth = $_SESSION['auth'];
            $beerArray = $this->beer->all();
            $quantity = $_POST['qty'];
            $id_user = $auth->getId();
            $this->orders->createOrder($beerArray, $quantity, $id_user);
            $ordersArray = $this->orders->all();
            dump($ordersArray);
            $ordersTotal = [];
            foreach ($ordersArray as $key => $order) {
                $ordersTotal[$order->getId()]= $order;
            }
            dump($ordersTotal);
            $id = $ordersTotal->lastInsertId();
            dd($id);
            $url = $this->generateUrl('purchase_order', ['id' => $id, 'id_user' => $id_user]);
            dd($url);
            header('location: '.$url);
        }
    }
    
    public function confirmOrder()
    {
        
        $title = 'Beer shop - Confirm order';
        return $this->render(
            'orders/confirmOrder',
            [
                "title" => $title
            ]
        );
    }
}