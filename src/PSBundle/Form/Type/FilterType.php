<?php


namespace PSBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('Date', 'choice', array(
                'choices' => array(
                    '2' => 'Last Month to Date',
                    '3' => 'This Month',
                    '4' => 'This Year',
                    '5' => 'Last Year'
                ),
                'required'    => false,
                'placeholder' => 'Choose Your Date',
                'label'  => 'Filter By Date',
                'empty_data'  => null
            ))
            ->add('Clients', 'entity', array(
                'class' => 'PSBundle:Clients',
                'placeholder' => 'Choose Client',
                'required'    => false,
                'label'  => 'Filter By Client',
                'property' => 'clientName'
            ))
            ->add('Products', 'entity', array(
                'class' => 'PSBundle:Products',
                'placeholder' => 'Choose Product',
                'required'    => false,
                'label'  => 'Filter By Product',
                'property' => 'productDescription'
            ))
            ->add('save', 'submit', array('label' => 'Submit'))
            ->add('reset', 'reset', array('label' => 'Reset'))
            ->getForm();

    }

    public function getName()
    {
        return 'filter';
    }
}
?>