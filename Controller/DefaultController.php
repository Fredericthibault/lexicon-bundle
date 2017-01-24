<?php

namespace Viweb\LexiconBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ViwebLexiconBundle:Default:index.html.twig');
    }
}
