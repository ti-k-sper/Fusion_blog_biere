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
        
        if(isset($_POST['qty'])) {
            $beerTotal = [];
            //dd($beerArray);
            foreach ($beerArray as $key => $beer) {
                $beerTotal[$beer['id']] = $beer;
            }
            dd($beer);
            $priceTTC = 0;
            foreach($_POST['qty'] as $key => $valueQty) { //on boucle sur le tableau $_POST["qty"]
                if($valueQty > 0) {
                    $price = $beerTotal[$key]['price']; 
                    $qty[$key] = ['qty' => $valueQty, "price"=>$price];
                    $priceTTC += $valueQty * $price * $tva;
                }
            }
            dd($priceTTC);
        
            $serialCommande = serialize($qty); //On convertit le tableau $qty en String pour 												l'envoyer en bdd plus tard.
        
            $orders = [":id_user"=>(int)$user['id_user'], ":ids_product"=>$serialCommande, ":priceTTC"=>$priceTTC];
        
            $order->createOrder($orders);
        
            $id = $pdo->lastInsertId(); //On recupère l'id de la dernière insertion en bdd
            dd($id);
            header('location: /confirm_order');
            exit();
        }

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