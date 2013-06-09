<?php

namespace Meytip\InnlabBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InnLabBetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('eventid')
            ->add('odds')
            ->add('prono')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meytip\InnlabBundle\Document\InnLabBet'
        ));
    }

    public function getName()
    {
        return 'meytip_innlabbundle_bettype';
    }
}
