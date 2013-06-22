<?php

namespace Meytip\InnlabBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuoteFinaleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('podio')
            ->add('nopodio')
            ->add('team')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meytip\InnlabBundle\Entity\QuoteFinale'
        ));
    }

    public function getName()
    {
        return 'meytip_innlabbundle_quotefinaletype';
    }
}
