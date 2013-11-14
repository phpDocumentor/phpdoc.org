<?php

namespace phpDocumentor\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Template()
     */
    public function docsAction($version, $location)
    {
        if (!$location) {
            return $this->redirect(
                $this->generateUrl(
                    'docs',
                    array('version' => $version, 'location' => 'index.html')
                )
            );
        }

        $generateDoc = $this->get('kernel')->getRootDir() . '/Resources/docs/' . $version . '/' . $location;
        if (!is_readable($generateDoc)) {
            throw new NotFoundHttpException();
        }

        switch(substr($generateDoc, -3)) {
            case 'png':
                $response = new Response(file_get_contents($generateDoc));
                $response->headers->set('Content-Type', 'image/png');
                return $response;
            case 'jpg':
                $response = new Response(file_get_contents($generateDoc));
                $response->headers->set('Content-Type', 'image/jpg');
                return $response;
            case 'gif':
                $response = new Response(file_get_contents($generateDoc));
                $response->headers->set('Content-Type', 'image/gif');
                return $response;
            default:
                return array(
                    'content' => file_get_contents($generateDoc)
                );
        }
    }

    /**
     * @Route("/contact", name="contact")
     * @Template()
     */
    public function contactAction()
    {
        return array();
    }

    /**
     * @Route("/about", name="about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }

    /**
     * @Route("/showcases", name="showcases")
     * @Template()
     */
    public function showcasesAction()
    {
        return array();
    }
}
