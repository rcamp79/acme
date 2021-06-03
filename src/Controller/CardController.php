<?php


namespace App\Controller;




use App\Entity\Card;
use App\Form\AddToOrderFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardController extends AbstractController
{
    /**
     * @Route("/card", name="card")
     */
    public function card(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(AddToOrderFormType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            /** @var  $user */
            $card = $form->getData();
            $card->setUser($this->getUser()->getUserIdentifier());
            $card->setOrderdate(new \DateTime());
            $em =$this->getDoctrine()->getManager();
            $em->persist($card);
            $em->flush();


            $this->addFlash('success', 'Item added!');

            $this->redirect($this->generateUrl('card'));


        }

        return $this->render('card.html.twig',[
            'addToOrder' =>  $form->createView()
        ]);
    }

}