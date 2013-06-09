<?php

namespace Meytip\InnlabBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('final')
            ->add('nofinal')
            ->add('team')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meytip\InnlabBundle\Entity\Quote'
        ));
    }

    public function getName()
    {
        return 'meytip_innlabbundle_quotetype';
    }
}
