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
    public function testAction()
    {
     $em1 = $this->getDoctrine()->getManager();
     $invoices = $em1->getRepository('PSBundle:Invoices'); /** @var $invoices PSBundle\Entity\Invoices */

       /** $stmt = $this->getDoctrine()->getManager()
            -> getConnection()
            -> prepare('
                SELECT
                *
                FROM
                invoices
                INNER JOIN
                InvoiceLineItems
                ON
                Invoices.invoice_num=InvoiceLineItems.invoice_num
                INNER JOIN
                Products
                ON
                InvoiceLineItems.product_id=products.product_id
                ');
        //$stmt = bindValue('',$);
        $stmt->execute();
        $invoices =  $stmt->fetchAll();
        */

       //  exit(\Doctrine\Common\Util\Debug::dump($result));

        //$form = $this->createForm(new FilterType());

        //$form->handleRequest($request);

       // if ($form->isValid()) {

            //$dateVar = $form->get('Date')->getData();
           // $clientVar = $form->get('Clients')->getData()->getClientId();
            //$productVar = $form->get('Products')->getData()->getProductId();

       // }


       /** return $this->render('PSBundle:Default:index.html.twig', array(
            'invoices' => $invoices,
            'form' => $form->createView()
        ));  */
    }

    public function indexAction(Request $request){

        $form = $this->createForm( new FilterType( ) );

        $form->handleRequest($request);
        if ($form->isValid()) {

            $dateVar = $form->get('Date')->getData();
            $clientVar = $form->get('Clients')->getData();

            //$clientVar = $clientVar['clientName'];

            $productVar = $form->get('Products')->getData();

            var_dump($dateVar);
            var_dump($clientVar);
            var_dump($productVar);

        }


        return $this->render('PSBundle:Default:form.html.twig', array(
            'form' => $form->createView(),
            'date' => $dateVar,
            'client' => $clientVar,
            'product' => $productVar


        ));

    }
}