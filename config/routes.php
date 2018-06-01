<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin('Chef', ['path' => '/'], function (RouteBuilder $route) {
    $route->prefix('admin', function (RouteBuilder $route) {
//        $route->extensions(['json']);

        $route->scope('/chef', [], function (RouteBuilder $route) {
            $route->fallbacks();
        });
    });
});
