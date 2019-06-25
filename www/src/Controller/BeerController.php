<?php
namespace App\Controller;

use \Core\Controller\Controller;

use App\Controller\PaginatedQueryAppController;

class BeerController extends Controller
{

    public function __construct()
    {
        $this->loadModel('beer');
    }

    public function home()
    {
        $title = 'Beer shop - Home';
        $this->render(
            'beer/home',
            [
                "title" => $title,
                "connect" => false
            ]
        );
    }

    public function all()
    {
        $paginatedQuery = new PaginatedQueryAppController(
            $this->beer,
            $this->generateUrl('articles')
        );

        $articles = $paginatedQuery->getItems();

        $title = 'Tous les articles';
        $this->render(
            'beer/articles',
            [
                "title" => $title,
                "articles" => $articles,
                "paginate" => $paginatedQuery->getNavHtml()
            ]
        );
    }
}