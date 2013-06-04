<?php
namespace OCTG;
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
      'acl' => array(
        'OCTG' => array(
            'OCTG - ADMINISTRATIVO' => array(
                'OCTG\Controller\Index:index',              
            ),
            'OCTG - INSPEÇÃO' => array(
                'OCTG\Controller\Index:index',              
            ),
            'OCTG - MACHINE SHOP' => array(
                'OCTG\Controller\Index:index',              
            ),
            'OCTG - VÁLVULAS' => array(
                'OCTG\Controller\Index:index',              
            ),
            'TI' => array(
                'OCTG\Controller\Index:index',              
            ),
        )
    ),
    'router' => array(
        'routes' => array(
            // This defines the hostname route which forms the base
            // of each "child" route
            'octg' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/octg',
                    'defaults' => array(
                       // '__NAMESPACE__' => 'OCTG\Controller',
                        'controller' => 'OCTG\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'pt_BR',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'OCTG\Controller\Index' => 'OCTG\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../../Base/view/layout/layout.phtml',
            'error/404' => __DIR__ . '/../../Base/view/error/404.phtml',
            'error/index' => __DIR__ . '/../../Base/view/error/index.phtml',
            'partials/navigation' => __DIR__ . '/../view/partials/navigation.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
