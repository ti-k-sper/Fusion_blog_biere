<?php
namespace App\Model\Entity;

use Core\Model\Entity;

use Core\Controller\Helpers\TextController;

class BeerEntity extends Entity
{
    private $id;

    private $title;

    private $img;

    private $content;

    private $price;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}