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
//        $template_repo = $this->getDoctrine()->getRepository('phpDocumentorStyleBundle:Template');
//
//        $templates = array();
//        foreach ($template_repo->findAll() as $key => $template) {
//            if ($key % 4 == 0) {
//                $templates[] = array();
//            }
//
//            $template->class = '';
//            if ($key % 4 == 3) {
//                $template->class = 'last';
//            }
//            $templates[count($templates) - 1][] = $template;
//        }

        return array(
//            'templates' => $templates
        );
    }

    /**
     * @Route("/template/{name}", name="template_show")
     * @Template
     */
    public function showAction($name)
    {
        $template_repo = $this->getDoctrine()->getRepository('phpDocumentorStyleBundle:Template');

        return array(
            'template' => $template_repo->findOneBySlug($name)
        );
    }
}
