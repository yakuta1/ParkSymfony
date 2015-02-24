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
                'empty_data'  => null,
                'attr' => array('class' => 'col-lg-3 form-control form-group noprint')
            ))
            ->add('Clients', 'entity', array(
                'class' => 'PSBundle:Clients',
                'placeholder' => 'Choose Client',
                'required'    => false,
                'label'  => 'Filter By Client',
                'property' => 'clientName',
                'attr' => array('class' => 'col-lg-3 form-control form-group noprint')
            ))
            ->add('Products', 'entity', array(
                'class' => 'PSBundle:Products',
                'placeholder' => 'Choose Product',
                'required'    => false,
                'label'  => 'Filter By Product',
                'property' => 'productDescription',
                'attr' => array('class' => 'col-lg-3 form-control form-group noprint')
            ))
            ->add('save', 'submit', array('label' => 'Submit',
                'attr' => array('class' => 'btn btn-danger space noprint')))
            ->add('reset', 'reset', array('label' => 'Reset',
                'attr' => array('class' => 'btn btn-success noprint')))
            ->getForm();

    }

    public function getName()
    {
        return 'filter';
    }
}
?>