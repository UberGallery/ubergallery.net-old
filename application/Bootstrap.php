<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

}

require_once 'Zend/Controller/Front.php';
require_once 'Zend/Controller/Router/Route.php';

$ctrl  = Zend_Controller_Front::getInstance();
$router = $ctrl->getRouter();

// Installation
$router->addRoute(
    'installation',
    new Zend_Controller_Router_Route('installation',
                               array('controller'   => 'index',
                                     'action'       => 'installation'))
);

// Customize
$router->addRoute(
    'customize',
    new Zend_Controller_Router_Route('customize',
                               array('controller'   => 'index',
                                     'action'       => 'customize'))
);

// FAQ
$router->addRoute(
    'faq',
    new Zend_Controller_Router_Route('faq',
                               array('controller'   => 'index',
                                     'action'       => 'faq'))
);

// Contact
$router->addRoute(
    'contact',
    new Zend_Controller_Router_Route('cuztomize',
                               array('controller'   => 'index',
                                     'action'       => 'contact'))
);