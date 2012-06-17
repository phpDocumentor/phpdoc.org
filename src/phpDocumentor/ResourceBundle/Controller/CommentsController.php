<?php

namespace phpDocumentor\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CommentsController extends Controller
{
    /**
     * @Route("/resource/comment/create")
     * @Template()
     *
     * @return array
     */
    public function createAction()
    {
        $resource = $this->getDoctrine()->getRepository('phpDocumentorResourceBundle:Resource')->findOneByName(
          $this->getRequest()->get('resource')
        );

        $comment = new \phpDocumentor\ResourceBundle\Entity\Comment();
        $comment->setResource($resource);
        $comment->setBody($this->getRequest()->get('body'));

        $mgr = $this->getDoctrine()->getEntityManager();
        $mgr->persist($comment);
        $mgr->flush();

        return $this->redirect($this->generateUrl('phpdocumentor_resource_plugins_show', array('name' => 'Core')));
    }
}
