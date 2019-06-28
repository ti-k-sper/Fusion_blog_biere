<?php
namespace App\Model\Table;

use Core\Model\Table;

class OrdersTable extends Table
{
    //$sql = "INSERT INTO `orders` (`id_user`,`ids_product`,`priceTTC`) VALUES (:id_user, :ids_product, :priceTTC)";
    public function createOrder($orders)
    {
        return $this->query("INSERT INTO `orders` (`id_user`,`ids_product`,`priceTTC`) VALUES (:id_user, :ids_product, :priceTTC)", $orders);
    }
}