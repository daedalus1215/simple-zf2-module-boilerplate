<?php
namespace Login;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'invokables' => [
            'Login\Controller\Index' => 'Login\Controller\IndexController'
        ],
    ],
    'router' => [
        'routes' => [
            'Login' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/login',
                    'defaults' => [
                        '__NAMESPACE__' => 'Login\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // You can place additional routes that match under the
                    // route defined above here.
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'login' => __DIR__ . '/../view',
        ],
    ],
];
