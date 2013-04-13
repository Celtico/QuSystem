<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

namespace QuSystem;

use QuAdmin\Options\QuAdminModelOptions;
use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\Crypt\Password\Bcrypt;

class Module implements BootstrapListenerInterface
{

    /**
     * Listen to the bootstrap event
     *
     * @param EventInterface $e
     * @return array
     */
    public function onBootstrap(EventInterface $e)
    {
        $app        = $e->getApplication();
        $em         = $app->getEventManager();

        $event = $em->getSharedManager();
        $event->attach('QuAdmin\Form\QuForm', 'postEventFormFilter.password', function($e){

            $data = $e->getParams();
            $bCrypt = new Bcrypt;
            $bCrypt->setCost(8);

            return $bCrypt->create($data['password']);

        }, 1);

    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'qu_users_model' => function ($sm) {
                    $config = $sm->get('Config');
                    return new QuAdminModelOptions($config['qu_users_model']);
                },
                'qu_languages_model' => function ($sm) {
                    $config = $sm->get('Config');
                    return new QuAdminModelOptions($config['qu_languages_model']);
                },
                'qu_parameters_model' => function ($sm) {
                    $config = $sm->get('Config');
                    return new QuAdminModelOptions($config['qu_parameters_model']);
                },


            ),
        );
    }

    public function getConfig()
    {
        $config = array();
        $configFiles = array(
            __DIR__ . '/config/module.config.php',
            __DIR__ . '/config/users.config.php',
            __DIR__ . '/config/languages.config.php',
            __DIR__ . '/config/parameters.config.php',
        );
        foreach($configFiles as $configFile) {
            $config = \Zend\Stdlib\ArrayUtils::merge($config, include $configFile);
        }
        return $config;
    }
    public function getAutoloaderConfig()
    {  
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

}
