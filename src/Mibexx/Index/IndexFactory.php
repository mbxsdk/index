<?php

namespace Mibexx\Index;


use Mibexx\Index\Provider\IndexRouteProvider;
use Mibexx\Kernel\Business\Locator\Module\AbstractFactory;

class IndexFactory extends AbstractFactory
{
    /**
     * @return IndexRouteProvider
     */
    public function createRouteProvider()
    {
        return new IndexRouteProvider();
    }
}