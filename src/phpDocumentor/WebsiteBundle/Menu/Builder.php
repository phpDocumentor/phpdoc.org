<?php
namespace phpDocumentor\WebsiteBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-pills');

        $menu->addChild('Home', array('route' => '_welcome'));
        $menu->addChild('About', array('route' => 'about'));
        $menu->addChild('Documentation', array('uri' => '/docs/latest'));
        $menu->addChild('Templates', array('route' => 'template_list'));
        $menu->addChild('Components', array('route' => 'component_list'));
        $menu->addChild('Contact', array('route' => 'contact'));

        return $menu;
    }
}
