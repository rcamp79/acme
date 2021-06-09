<?php /** @noinspection DuplicatedCode */


namespace App\Controller;


use App\Entity\Card;
use App\Entity\Order;
use App\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MakeOrderController extends AbstractController
{
    /**
     * @Route("/enter", name="enter")
     */
    public function new(Request $request): Response{
        $order = new Order();
        $order->setNumCards(2);
        $order->setValue(1.00);
        $order->setDate(new \DateTime());
        $order->setUser('Test User');


//        Dummy data

        $card1 = new Card();
        $card1->setManufacturer('Test');
        $card1->setYear(1979);
        $card1->setSetname('Test set');
        $card1->setPlayer('Test Player');
        $card1->setCardnum(1);
        $card1->setVariation('Test Variation');
        $card1->setValue('1.00');
        $card1->setUser('Test User');
        $card1->setOrderdate(new \DateTime());

//
        $card2 = new Card();
        $card2->setManufacturer('Test Manufacturer');
        $card2->setYear(1979);
        $card2->setSetname('Test set');
        $card2->setPlayer('Test Player');
        $card2->setCardnum(1);
        $card2->setVariation('Test Variation');
        $card2->setValue('1.00');
        $card2->setUser('Test User');
        $card2->setOrderdate(new \DateTime());

        $order->getCards()->add($card1);
//        $order->getCards()->add($card2);


// End dummy data

        $form = $this->createForm(OrderType::class, $order);

        $form->handleRequest($request);



        if($form->isSubmitted()){

//            update entities


        }

        return $this->render('enter.html.twig', [
            'form'=>$form->createView(),
        ]);


    }
}