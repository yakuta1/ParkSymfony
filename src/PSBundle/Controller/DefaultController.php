<?php

namespace PSBundle\Controller;

use PSBundle\Form\Type\FilterType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;



use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class DefaultController extends Controller
{

    public function indexAction(Request $request){

        $form = $this->createForm( new FilterType( ) );

        $form->handleRequest($request);
        if ($form->isValid()) {


            $date = $form->get('Date')->getData();
            $client = $form->get('Clients')->getData()->getClientId();
            $product = $form->get('Products')->getData()->getProductId();

            $em1 = $this->getDoctrine()->getManager();
            $invoices = $em1->getRepository('PSBundle:Invoices')->test($date,$client,$product); /** @var $invoices PSBundle\Entity\Invoices */

            //exit(\Doctrine\Common\Util\Debug::dump($invoices));

            return $this->render('PSBundle:Default:index.html.twig', array(
                'form' => $form->createView(),
                'invoices'=> $invoices
            ));

        }

        return $this->render('PSBundle:Default:form.html.twig', array(
            'form' => $form->createView()
        ));

    }
}