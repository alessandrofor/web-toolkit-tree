<?php

namespace AlberoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * Questo metodo permette di generare un albero
     * Riceve in imput un oggetto di tipo Symfony\Component\Form\Extension\Core\Type\ChoiceType
     *
     */
    public function indexAction($checkBoxList)
    {
        return $this->render('AlberoBundle:Default:index.html.twig', array('form' => $checkBoxList));
    }
}
