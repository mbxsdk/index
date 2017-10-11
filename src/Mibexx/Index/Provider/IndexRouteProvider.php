<?php

namespace Mibexx\Index\Provider;


use Mibexx\Router\Provider\AbstractRouteProvider;
use Symfony\Component\HttpFoundation\Request;

class IndexRouteProvider extends AbstractRouteProvider
{
    public function defineRoute()
    {
        $this->addRoute(
            '/',
            self::ROUTE_GET,
            function (Request $request) {
                return 'Hello Mibexx ' . $request->get('name');
            }
        );
    }

}