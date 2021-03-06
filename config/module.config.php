<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
return array(


    'controllers' => array(
        'invokables' => array(
            'users_controller' => 'QuSystem\Controller\QuUsersController',
            'languages_controller'  => 'QuSystem\Controller\QuLanguagesController',
            'translator_controller'  => 'QuSystem\Controller\QuTranslatorController',
            'parameters_controller'  => 'QuSystem\Controller\QuParametersController',
            'el_finder_controller'  => 'QuSystem\Controller\QuElFinderController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

    /**
     *
     *
     * QuAdmin Navigation
     *
     *
     */
    'router' => array(
        'routes' => array(
            'system_route' => array(
                'type' => 'Literal',
                'priority' => 1000,
                'options' => array(
                    'route' => '/system',
                    'defaults' => array(
                        'controller'    => 'users_controller',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'users_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/users[/:action][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]+',
                                'id_parent' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'users_controller',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'languages_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/languages[/:action][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]+',
                                'id_parent' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'languages_controller',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'translator_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/translator[/:action][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]+',
                                'id_parent' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'translator_controller',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'parameters_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/parameters[/:action][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]+',
                                'id_parent' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'parameters_controller',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'el_finder_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/elfinder[/:action][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]+',
                                'id_parent' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'el_finder_controller',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'qu_ico_moon_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/icomoon[/:action][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]+',
                                'id_parent' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'qu_ico_moon_controller',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'cgmconfigadmin_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/config[/:action][/:id][/:id_parent]',
                            'defaults' => array(
                                'controller'    => 'CgmConfigAdmin_ConfigOptionsController',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    'qu_ace_route' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route' => '[/:lang]/ace[/:action][/:id][/:id_parent]',
                            'constraints' => array(
                                'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'        => '[0-9]+',
                                'id_parent' => '[0-9]+',
                            ),
                            'defaults' => array(
                                'lang'          => 'es',
                                'controller'    => 'qu_ace_controller',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),


    /**
     *
     *
     * QuAdmin Navigation
     *
     *
     */
    'navigation' => array(

        'qu_admin_navigation' => array(
            'system' => array(
                'icon'  => '&#xe04d;',
                'label' => 'System',
                'route' => 'system_route/users_route',
                'order' =>100,
                'pages' => array(
                    'users_route'  => array(
                        'order' =>1,
                        'icon'  => '&#xe1e1;',
                        'label' => 'Users',
                        'route' => 'system_route/users_route',
                    ),
                    'languages' => array(
                        'order' =>2,
                        'icon'  => '&#xe07e;',
                        'label' => 'Languages',
                        'route' => 'system_route/languages_route',
                    ),
                    'parameters' => array(
                        'order' =>3,
                        'icon'  => '&#xe141;',
                        'label' => 'Parameters',
                        'route' => 'system_route/parameters_route',
                    ),
                    'translator' => array(
                        'order' =>3,
                        'icon'  => '&#xe12c;',
                        'label' => 'Translator',
                        'route' => 'system_route/translator_route',
                    ),
                    /*'utilities' => array(
                          'icon'  => '&#xe13c;',
                          'label' => 'Utilities',
                          'route' => 'system_route/qu_ico_moon_route',
                          'order' =>100,
                          'pages' => array(*/

                    /*),
                ),*/
                    'cgmconfigadmin' => array(
                        'order' =>10,
                        'icon'   =>'&#xe13c;',
                        'label' => 'ConfigAdmin',
                        'route' => 'system_route/cgmconfigadmin_route',

                    ),
                ),
            ),
        ),
    ),

    /**
     *
     *
     * QuAdmin Strategy
     *
     *
     */
    'QuAdminConfig' => array(
        // NAMESPACE Layout Module
        'QuLayout' => array(
            'QuSystem' => 'qu-admin/layout/qu-admin-layout' ,
            'CgmConfigAdmin' => 'qu-admin/layout/qu-admin-layout'
        ),

        // NAMESPACE Base Path Module
        'QuBasePath' => array(
            'QuSystem' => '/qu-admin',
             'CgmConfigAdmin' => '/qu-admin'
        ),

        // NAMESPACE Redirect login
        'QuRedirectLogin' => array(
            'QuSystem' => true,
            'CgmConfigAdmin' => true,
        ),
    ),

);