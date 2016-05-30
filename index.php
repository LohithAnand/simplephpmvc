<?php
/**
 * Author: Lohith
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors','on');

require_once 'config.php';
require_once 'includes/Router.php';

$router = new App_Router();
$router->process(new App_Request($_REQUEST));



