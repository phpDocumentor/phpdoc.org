<?php

namespace phpDocumentor\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
     * @Route("/components/{name}", name="component")
     * @Template()
     */
    public function componentAction($name)
    {
        $parser = new \dflydev\markdown\MarkdownExtraParser();
        $data = json_decode(file_get_contents(
            'https://api.github.com/repos/phpDocumentor/'.$name
        ));
        $data->readme = $parser->transformMarkdown(file_get_contents(
            'https://raw.github.com/phpDocumentor/' . $name . '/master/README.md'
        ));

        return array('data' => $data);
    }
}
