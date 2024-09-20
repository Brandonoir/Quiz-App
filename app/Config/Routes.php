<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->add('login', 'Home::login');
$routes->add('test-page', 'Home::test');
// $routes->add('test', 'Answers::correctAnswers');
$routes->add('/', 'Answers::correctAnswers');