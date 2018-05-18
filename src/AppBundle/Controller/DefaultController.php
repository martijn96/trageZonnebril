<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bestelstatus;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Form\Type\ProductType;
use AppBundle\Entity\Bestelopdracht;
use AppBundle\Form\Type\BestelopdrachtType;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
 * @Route ("/product/nieuw ", name="productnieuw")
 */
    public function nieuweProduct(Request $request){
        $nieuweProduct = new Product();
        $form = $this->createForm(ProductType::class, $nieuweProduct);
        $form = $this->createForm(Bestelstatus::class, $nieuweProduct);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuweProduct);
            $em->flush();
            return $this->redirect($this->generateurl("productnieuw"));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    /**
     * @Route ("/bestelopdracht/nieuw ", name="bestelopdrachtnieuw")
     */
    public function nieuweBestelopdracht(Request $request){
        $nieuweBestelopdracht = new Bestelopdracht();
        $form = $this->createForm(BestelopdrachtType::class, $nieuweBestelopdracht);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuweBestelopdracht);
            $em->flush();
            return $this->redirect($this->generateurl("bestelopdrachtnieuw"));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    /** 
    * @Route ("/bestelopdracht/wijzig/{id} ", name="bestelopdrachtwijzigen")
    */
    public function wijzigBestelopdracht(Request $request, $id){
        $bestaandeProduct = $this->getDoctrine()->getRepository("AppBundle:Product")->find($id);
        $form = $this->createForm(ProductType::class, $bestaandeProduct);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandeProduct);
            $em->flush();
            return $this->redirect($this->generateurl("bestelopdrachtwijzigen", array("id" => $bestaandeProduct->getId())));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    /** 
    * @Route ("/producten/alle", name="alleproducten")
    */
    public function alleProducten(Request $request){
        $producten = $this->getDoctrine()->getRepository("AppBundle:Product")->findAll();
        
        return new Response($this->render('producten.html.twig', array('producten' => $producten)));
    }

    /**
     * @Route ("/bestelopdracht/alle", name="allebesteldrachten")
     */
    public function alleBestellingen(Request $request){
        $bestellingen = $this->getDoctrine()->getRepository("AppBundle:Bestelopdracht")->findAll();

        return new Response($this->render('bestellingen.html.twig', array('bestellingen' => $bestellingen)));
    }

    /** 
    * @Route ("/bestelopdracht/verwijderen/{id} ", name="bestelopdrachtverwijderen")
    */
    public function verwijderBestelopdracht(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $bestaandeBestelopdracht = $em->getRepository("AppBundle:Bestelopdracht")->find($id);
        $em->remove($bestaandeBestelopdracht);
        $em->flush();



        return new Response($this->redirect($this->generateurl("allebesteldrachten")));
    }


}
