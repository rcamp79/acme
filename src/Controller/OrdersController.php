<?php


namespace App\Controller;


use App\Entity\Card;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{

    /**
     * @Route("/order", name="order")
     */
    public function order(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser()->getUserIdentifier();
        $repository = $em->getRepository(Card::class);

        $data = $repository->findBy(['user' => $user]);

        if (isset($data)) {
            return $this->render('order.html.twig', [
                'data' => $data
            ]);
        }

        return $this->render('order.html.twig');
    }



}