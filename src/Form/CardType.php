<?php


namespace App\Form;


use App\Entity\Card;
use App\Entity\Order;
use Decimal\Decimal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Currency;


class CardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('manufacturer', TextType::class, [
                'attr' => [ 'placeholder' => 'Manufacturer']
            ])
            ->add('year', IntegerType::class, [
                'attr' => [ 'placeholder' => 'Card Year']
            ])
            ->add('setname', TextType::class, [
                'attr' => [ 'placeholder' => 'Name of the Set']
            ])
            ->add('player', TextType::class, [
                'attr' => [ 'placeholder' => 'Player']
            ])
            ->add('cardnum', IntegerType::class, [
                'attr' => [ 'placeholder' => 'Card Number']
            ])
            ->add('variation', TextType::class, [
                'attr' => [ 'placeholder' => 'Variation']
            ])
            ->add('value', IntegerType::class, [
                'attr' => [ 'placeholder' => 'Card Value i.e. $1.00']
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Card::class,
        ]);
    }

}