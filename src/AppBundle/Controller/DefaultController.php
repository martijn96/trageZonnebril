<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Goederenontvangst;
use AppBundle\Form\Type\GoederenontvangstType;
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
    * @Route ("/magazijn/nieuw", name="goederennieuw")
    */
    public function nieuweGoederen(Request $request){
        $nieuweGoederen = new Goederenontvangst();
        $form = $this->createForm(GoederenontvangstType::class, $nieuweGoederen);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuweGoederen);
            $em->flush();
            return $this->redirect($this->generateurl("goederennnieuw"));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }



}
