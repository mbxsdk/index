<?php

namespace Mibexx\Index\Dependency;


use Mibexx\Dependency\Business\Provider\AbstractInjectionProvider;
use Mibexx\Dependency\Business\ContainerInterface;
use Mibexx\Router\Provider\RouteProviderCollection;
use Mibexx\Router\Shared\RouterConstants;

/**
 * @method \Mibexx\Index\IndexFactory getFactory()
 */
class IndexInjectionProvider extends AbstractInjectionProvider
{
    public function injectDependency(ContainerInterface $container)
    {
        $container->extend(RouterConstants::ROUTER_ROUTE_PROVIDER, function (RouteProviderCollection $routeProviderCollection) {
                $routeProviderCollection->add($this->getFactory()->createRouteProvider());

                return $routeProviderCollection;
            }
        );
    }

}