<?php /** @noinspection DuplicatedCode */


namespace App\Controller;


use App\Entity\Card;
use App\Entity\Order;
use App\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MakeOrderController extends AbstractController
{
    /**
     * @Route("/enter", name="enter")
     */
    public function new(Request $request, UserInterface $user): Response{
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser()->getUserIdentifier();

//        $order = new Order();
//        $card = new Card();
//        $order->getCards()->add($card);

        $form = $this->createForm(OrderType::class);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $order = new Order();

            $order->setNumCards($order->getCards()->count());
            $order->setDate(new \DateTime());
            $order->setUser($user);

            $em->persist($order);
            $em->flush();
            unset($order);
            $order = new Order();
            unset($form);
            $form = $this->createForm(OrderType::class, $order);
            $card = new Card();
            $order->getCards()->add($card);
            
        }

        return $this->render('enter.html.twig', [
            'form'=>$form->createView(),
        ]);


    }
}