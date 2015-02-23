<?php

namespace PSBundle\Controller;

use PSBundle\Form\Type\FilterType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em1 = $this->getDoctrine()->getManager();
        $invoices = $em1->getRepository('PSBundle:Invoices')->findAll();





        $form = $this->createForm(new FilterType());

        $form->handleRequest($request);

        if ($form->isValid()) {

            $dateVar = $form->get('Date')->getData();
            $clientVar = $form->get('Clients')->getData()->getClientId();
            $productVar = $form->get('Products')->getData()->getProductId();

        }


        return $this->render('PSBundle:Default:index.html.twig', array('invoices' => $invoices, 'form' => $form->createView()));
    }
}
