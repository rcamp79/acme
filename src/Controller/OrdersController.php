<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{

    /**
     * @Route("/order", name="order")
     */
    public function order(Request $request): Response
    {


        return $this->render('order.html.twig');
    }


}