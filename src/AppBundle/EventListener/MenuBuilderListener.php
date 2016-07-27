<?php
namespace AppBundle\EventListener;

use Sonata\AdminBundle\Event\ConfigureMenuEvent;

class MenuBuilderListener
{
    public function addMenuItems(ConfigureMenuEvent $event)
    {
        $menu = $event->getMenu();

        $child = $menu->addChild('reports', array(
            'route' => 'app_reports_index',
            'labelAttributes' => array('icon' => 'fa fa-bar-chart'),
        ));

        $child->setLabel('Daily and monthly reports');
    }
}