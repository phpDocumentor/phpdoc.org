<?php

namespace phpDocumentor\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PluginsController extends Controller
{
    /**
     * @Route("/plugin")
     * @Template()
     *
     * @return array
     */
    public function indexAction()
    {

      /** @var \Symfony\Component\HttpFoundation\Request $request  */
      $request = $this->getRequest();
      $search = $request->get('search');

      $plugin_repo = $this->getDoctrine()->getRepository('phpDocumentorResourceBundle:Resource');
      $plugins = $search
        ? $this->getDoctrine()->getEntityManager()
          ->createQuery('SELECT r FROM phpDocumentorResourceBundle:Resource r WHERE r.name LIKE ?1', array('%' . $search . '%'))
          ->getResult()
        : $plugin_repo->findAll();

      return array('plugins' => $plugins);
    }

    /**
     * @Route("/plugin/{name}")
     * @Template()
     *
     * @param string $name name of the plugin
     *
     * @return array
     */
    public function showAction($name)
    {
        /** @var \phpDocumentor\ResourceBundle\Entity\Resource $plugin  */
        $plugin = $this->getDoctrine()->getRepository('phpDocumentorResourceBundle:Resource')->findOneByName($name);

        return array('plugin' => $plugin);
    }
}
