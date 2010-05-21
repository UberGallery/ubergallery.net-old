<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

}

require_once 'Zend/Controller/Front.php';
require_once 'Zend/Controller/Router/Route.php';

$ctrl  = Zend_Controller_Front::getInstance();
$router = $ctrl->getRouter();

// News
$router->addRoute(
    'news',
    new Zend_Controller_Router_Route('news',
                               array('controller'   => 'index',
                                     'action'       => 'news'))
);

// Installation
$router->addRoute(
    'installation',
    new Zend_Controller_Router_Route('installation',
                               array('controller'   => 'index',
                                     'action'       => 'installation'))
);

// Configuration
$router->addRoute(
    'configuration',
    new Zend_Controller_Router_Route('configuration',
                               array('controller'   => 'index',
                                     'action'       => 'configuration'))
);

// Demo
$router->addRoute(
    'demo',
    new Zend_Controller_Router_Route('demo',
                               array('controller'   => 'index',
                                     'action'       => 'demo'))
);

// Version Check
$router->addRoute(
    'version-check',
    new Zend_Controller_Router_Route('version-check.php',
                               array('controller'   => 'index',
                                     'action'       => 'version-check'))
);
