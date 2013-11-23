<?php

namespace phpDocumentor\StyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/templates", name="template_list")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
