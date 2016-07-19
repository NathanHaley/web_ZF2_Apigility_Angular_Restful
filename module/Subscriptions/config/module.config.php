<?php
return array(
    'router' => array(
        'routes' => array(
            'subscriptions.rest.subscriptions' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/subscriptions[/:subscriptions_id]',
                    'defaults' => array(
                        'controller' => 'Subscriptions\\V1\\Rest\\Subscriptions\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'subscriptions.rest.subscriptions',
        ),
    ),
    'zf-rest' => array(
        'Subscriptions\\V1\\Rest\\Subscriptions\\Controller' => array(
            'listener' => 'Subscriptions\\V1\\Rest\\Subscriptions\\SubscriptionsResource',
            'route_name' => 'subscriptions.rest.subscriptions',
            'route_identifier_name' => 'subscriptions_id',
            'collection_name' => 'subscriptions',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'StatusLib\\Entity',
            'collection_class' => 'StatusLib\\Collection',
            'service_name' => 'subscriptions',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Subscriptions\\V1\\Rest\\Subscriptions\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Subscriptions\\V1\\Rest\\Subscriptions\\Controller' => array(
                0 => 'application/vnd.subscriptions.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Subscriptions\\V1\\Rest\\Subscriptions\\Controller' => array(
                0 => 'application/vnd.subscriptions.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Subscriptions\\V1\\Rest\\Subscriptions\\SubscriptionsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'subscriptions.rest.subscriptions',
                'route_identifier_name' => 'subscriptions_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Subscriptions\\V1\\Rest\\Subscriptions\\SubscriptionsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'subscriptions.rest.subscriptions',
                'route_identifier_name' => 'subscriptions_id',
                'is_collection' => true,
            ),
            'StatusLib\\Entity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'subscriptions.rest.subscriptions',
                'route_identifier_name' => 'subscriptions_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'StatusLib\\Collection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'subscriptions.rest.subscriptions',
                'route_identifier_name' => 'subscriptions_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'Subscriptions\\V1\\Rest\\Subscriptions\\SubscriptionsResource' => array(
                'adapter_name' => 'Company',
                'table_name' => 'subscriptions',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
                'controller_service_name' => 'Subscriptions\\V1\\Rest\\Subscriptions\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'Subscriptions\\V1\\Rest\\Subscriptions\\SubscriptionsResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Subscriptions\\V1\\Rest\\Subscriptions\\Controller' => array(
            'input_filter' => 'Subscriptions\\V1\\Rest\\Subscriptions\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Subscriptions\\V1\\Rest\\Subscriptions\\Validator' => array(
            0 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '254',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'location_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'active',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'timestamp_add',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'Subscriptions\\V1\\Rest\\Subscriptions\\Controller' => array(
                'collection' => array(
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
);
