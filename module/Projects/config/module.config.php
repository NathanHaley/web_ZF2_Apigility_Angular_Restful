<?php
return array(
    'router' => array(
        'routes' => array(
            'projects.rest.projects' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/projects[/:projects_id]',
                    'defaults' => array(
                        'controller' => 'Projects\\V1\\Rest\\Projects\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'projects.rest.projects',
        ),
    ),
    'zf-rest' => array(
        'Projects\\V1\\Rest\\Projects\\Controller' => array(
            'listener' => 'Projects\\V1\\Rest\\Projects\\ProjectsResource',
            'route_name' => 'projects.rest.projects',
            'route_identifier_name' => 'projects_id',
            'collection_name' => 'projects',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'DELETE',
                2 => 'PUT',
                3 => 'POST',
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
            'service_name' => 'projects',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Projects\\V1\\Rest\\Projects\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Projects\\V1\\Rest\\Projects\\Controller' => array(
                0 => 'application/vnd.projects.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Projects\\V1\\Rest\\Projects\\Controller' => array(
                0 => 'application/vnd.projects.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Projects\\V1\\Rest\\Projects\\ProjectsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'projects.rest.projects',
                'route_identifier_name' => 'projects_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Projects\\V1\\Rest\\Projects\\ProjectsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'projects.rest.projects',
                'route_identifier_name' => 'projects_id',
                'is_collection' => true,
            ),
            'StatusLib\\Entity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'projects.rest.projects',
                'route_identifier_name' => 'projects_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'StatusLib\\Collection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'projects.rest.projects',
                'route_identifier_name' => 'projects_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'Projects\\V1\\Rest\\Projects\\ProjectsResource' => array(
                'adapter_name' => 'Projects',
                'table_name' => 'projects',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
                'controller_service_name' => 'Projects\\V1\\Rest\\Projects\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'Projects\\V1\\Rest\\Projects\\ProjectsResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Projects\\V1\\Rest\\Projects\\Controller' => array(
            'input_filter' => 'Projects\\V1\\Rest\\Projects\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Projects\\V1\\Rest\\Projects\\Validator' => array(
            0 => array(
                'name' => 'name',
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
                'name' => 'site',
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
            2 => array(
                'name' => 'description',
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
        ),
    ),
);
