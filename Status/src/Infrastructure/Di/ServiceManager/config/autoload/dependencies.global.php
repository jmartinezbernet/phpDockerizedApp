<?php

use Status\Infrastructure\Di\ServiceManager\Factories\RestFulMiddlewareAbstractFactory;
use Zend\Db\Adapter\Adapter;
use Zend\Db\Adapter\AdapterServiceFactory;

return [
    'dependencies' => [
        'abstract_factories' => [
            RestFulMiddlewareAbstractFactory::class
        ],
        'factories' => array(
            //Framework
            Adapter::class => AdapterServiceFactory::class,
            Zend\Expressive\Router\AuraRouter::class => \Zend\ServiceManager\Factory\InvokableFactory::class,
            Zend\Expressive\Application::class => Zend\Expressive\Container\ApplicationFactory::class,

            //Transaction

            //Application Service

            //Service

            //Repository

            //Query

            //Specification

        ),
        'aliases' => [
            'configuration' => 'config',
            \Zend\Expressive\Router\RouterInterface::class => \Zend\Expressive\Router\AuraRouter::class,
        ],
        'invokables' => []
    ],
];
