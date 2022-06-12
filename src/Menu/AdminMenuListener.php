<?php

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu
            ->addChild('new')
            ->setLabel('CRUD')
        ;

        $newSubmenu
            ->addChild('new-subitem')
            ->setLabel('Car management')
            ->setUri('/admin/cars/')
        ;
    }
}
