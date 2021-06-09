<?php


namespace App\Form;


use App\Entity\Card;
use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('manufacturer', TextType::class, [
                'attr' => ['value' => '', 'placeholder' => 'Manufacturer']
            ])
            ->add('year', IntegerType::class, [
                'attr' => ['value' => '', 'placeholder' => 'Card Year']
            ])
            ->add('setname', TextType::class, [
                'attr' => ['value' => '', 'placeholder' => 'Name of the Set']
            ])
            ->add('player', TextType::class, [
                'attr' => ['value' => '', 'placeholder' => 'Player']
            ])
            ->add('cardnum', IntegerType::class, [
                'attr' => ['value' => '', 'placeholder' => 'Card Number']
            ])
            ->add('variation', TextType::class, [
                'attr' => ['value' => '', 'placeholder' => 'Variation']
            ])
            ->add('value', TextType::class, [
                'attr' => ['value' => '', 'placeholder' => 'Card Value i.e. 1.00']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Card::class,
        ]);
    }

}