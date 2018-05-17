<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Form\Type\ProductType;
use AppBundle\Entity\Categorie;
use AppBundle\Form\Type\CategorieType;

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
    * @Route ("/product/wijzig/{id} ", name="productwijzigen")
    */
    public function wijzigProduct(Request $request, $id){
        $bestaandeProduct = $this->getDoctrine()->getRepository("AppBundle:Product")->find($id);
        $form = $this->createForm(ProductType::class, $bestaandeProduct);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandeProduct);
            $em->flush();
            return $this->redirect($this->generateurl("productwijzigen", array("id" => $bestaandeProduct->getId())));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }



    /** 
    * @Route ("/product/verwijderen/{id} ", name="productverwijderen")
    */
    public function verwijderProduct(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $bestaandeProduct = $em->getRepository("AppBundle:Product")->find($id);
        $em->remove($bestaandeProduct);
        $em->flush();



        return new Response($this->redirect($this->generateurl("alleproducten")));

    }

    /**
     * @Route ("/producten/alle", name="alleproducten")
     */
    public function alleProducten(Request $request){
        $producten = $this->getDoctrine()->getRepository("AppBundle:Product")->findAll();

        return new Response($this->render('producten.html.twig', array('producten' => $producten)));
    }

    //hieronder staat mijn code die ik heb gebruikt

    /**
     * @Route ("/goederen/ontvangen", name="ontvangengoederen")
     */
    public function ontvangenGoederen(Request $request){
        $productbarcode = $this->getDoctrine()->getRepository("AppBundle:OntvangenGoederen")->findAll();

        return new Response($this->render('ontvangengoederen.html.twig', array('ontvangengoederen' => $productbarcode)));
    }



}
