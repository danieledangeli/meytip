<?php

namespace Meytip\InnlabBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('logopath')
            ->add('tagline')
            ->add('teewtidea')
            ->add('esito')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Meytip\InnlabBundle\Entity\Team'
        ));
    }

    public function getName()
    {
        return 'meytip_innlabbundle_teamtype';
    }
}
