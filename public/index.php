<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
/**
 * Composer
 */
require '../vendor/autoload.php';


/**
 * Error and Exception handling
 */

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');
/**
 * Routing
 */
$router = new Core\Router();

// Add the routes

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{action}/{id:\d+}/');
$router->add('{controller}/{action}/{id:\d+}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
    
$router->dispatch($_SERVER['QUERY_STRING']);