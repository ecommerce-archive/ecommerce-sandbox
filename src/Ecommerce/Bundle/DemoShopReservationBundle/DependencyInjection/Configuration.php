<?php

namespace Ecommerce\Bundle\DemoShopReservationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Philipp Wahala <philipp.wahala@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $treeBuilder->root('ecommerce_demo_shop_reservation')
            ->children()
            ->end()
        ;
        return $treeBuilder;
    }
}
