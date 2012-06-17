<?php

namespace phpDocumentor\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/resource/{name}")
     * @Template()
     *
     * @return array
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
}
