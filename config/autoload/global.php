<?php
return array(
    'db' => array(
        'adapters' => array(
            'Company' => array(),
            'Projects' => array(),
            'Users' => array(),
        ),
    ),
    'router' => array(
        'routes' => array(
            'oauth' => array(
                'options' => array(
                    'spec' => '%oauth%',
                    'regex' => '(?P<oauth>(/oauth))',
                ),
                'type' => 'regex',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'Subscriptions\\V1' => 'oauth_adapter',
                'Projects\\V1' => 'oauth_adapter',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
        ),
    ),
    'zf-content-negotiation' => array(
        'selectors' => array(
            'mySelector' => array(),
        ),
    ),
);
