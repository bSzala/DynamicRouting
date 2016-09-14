<?php

return [

    /**
     * Middleware Group
     *
     * All routes provided by the dynamic route bundle will be registered in
     * the following middleware group.
     *
     * Default: 'web'
     */
    'middleware-group' => 'web',

    /**
     * Handlers
     *
     * Defines all used route type handlers. Each handler is in charge of
     * processing a type of dynamic route. Other packages may contain custom
     * route handlers which have to be added here.
     */
    'handlers' => [
        \ElementsFramework\DynamicRouting\Handler\ControllerActionRouteHandler::class,
        \ElementsFramework\DynamicRouting\Handler\RedirectRouteHandler::class,
    ],

    /**
     * Compiled Routes Path
     *
     * Path in which dynamic routes will be compiled and saved when you run
     * the compilation step or compile them in-code.
     *
     * Default: 'routes/dynamic.php'
     */
    'compiled-routes-path' => 'routes/dynamic.php',
];