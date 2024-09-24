<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('create-test', 'CreateTest::index');
$routes->post('create-test', 'CreateTest::index');
$routes->post('score', 'Score::index');
$routes->get('answers', 'Answers::index');