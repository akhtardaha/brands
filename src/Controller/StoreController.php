<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class StoreController extends AbstractController
{

    public function index($store)
    {
        return $this->render($store."/store.html.twig", ["store" => $store]);
    }
}