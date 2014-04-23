<?php
 
return array(
    # definir e gerenciar controllers
    'controllers' => array(
        'invokables' => array(
            'HomeController' => 'TipoAvaliacoes\Controller\HomeController',
            'AvaliacaoController'    => 'TipoAvaliacoes\Controller\AvaliacaoController',
        ),
    ),
 
    # definir e gerenciar rotas
    'router' => array(
        'routes' => array(
            # literal para action index home
            'home' => array(
                'type'      => 'Literal',
                'options'   => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'HomeController',
                        'action'     => 'index',
                    ),
                ),
            ),
            # literal para action novo home
           'novo' => array(
               'type'      => 'Literal',
               'options'   => array(
                   'route'    => '/novo',
                   'defaults' => array(
                       'controller' => 'HomeController',
                       'action'     => 'novo',
                   ),
               ),
           ), 
            
    
        
    # segment para controller avaliacao
            'avaliacao' => array(
                'type'      => 'Segment',
               'options'   => array(
                   'route'    => '/avaliacao[/:action][/:id]',
                    'constraints' => array(
                       'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                   ),
                    'defaults' => array(
                       'controller' => 'AvaliacaoController',
                       'action'     => 'index',
                    ),
               ),
           ),
        ),
    ),
    
 
    # definir e gerenciar servicos
    'service_manager' => array(
        'factories' => array(
            #'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
 
    # definir e gerenciar layouts, erros, exceptions, doctype base
    'view_manager' => array(
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'template_map'              => array(
            'layout/layout'         => __DIR__ . '/../view/layout/layout.phtml',
            'TipoAvaliacoes/home/index'    => __DIR__ . '/../view/tipoavaliacoes/home/index.phtml',
            'error/404'             => __DIR__ . '/../view/error/404.phtml',
            'error/index'           => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);