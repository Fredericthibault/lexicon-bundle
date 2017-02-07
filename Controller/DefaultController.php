<?php

namespace Viweb\LexiconBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $terms = $this->get('viweb.repository.lexicon')->findAll();
        return $this->render('ViwebLexiconBundle:Default:index.html.twig', [
            'terms' => $terms
        ]);
    }
}
