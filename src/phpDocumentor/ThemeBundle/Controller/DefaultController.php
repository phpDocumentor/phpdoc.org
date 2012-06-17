<?php

namespace phpDocumentor\ThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/themes", name="template_list")
     * @Template()
     */
    public function indexAction()
    {
        $theme_repo = $this->getDoctrine()->getRepository('phpDocumentorThemeBundle:Theme');

        $themes = array();
        foreach ($theme_repo->findAll() as $key => $theme) {
            if ($key % 4 == 0) {
                $themes[] = array();
            }

            $theme->class = '';
            if ($key % 4 == 3) {
                $theme->class = 'last';
            }
            $themes[count($themes) - 1][] = $theme;
        }

        return array(
            'themes' => $themes
        );
    }

    /**
     * @Route("/theme/{name}", name="theme_show")
     * @Template
     */
    public function showAction($name)
    {
        $theme_repo = $this->getDoctrine()->getRepository('phpDocumentorThemeBundle:Theme');

        return array(
            'theme' => $theme_repo->findOneBySlug($name)
        );
    }
}
