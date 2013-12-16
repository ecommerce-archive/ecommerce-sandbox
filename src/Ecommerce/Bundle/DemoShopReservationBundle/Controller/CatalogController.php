<?php

namespace Ecommerce\Bundle\DemoShopReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'EcommerceDemoShopReservationBundle:Catalog:index.html.twig',
            array(
                'products' => '',
            )
        );
    }
}
