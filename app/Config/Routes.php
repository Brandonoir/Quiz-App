<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('score', 'Score::index');
$routes->get('answers', 'Answers::index');
// $routes->get('create-question', 'CreateQuestion::index');
$routes->post('create-question', 'CreateQuestion::index');
$routes->post('get-question', 'CreateQuestion::getQuestion');
$routes->post('save-test', 'Home::saveTest');
