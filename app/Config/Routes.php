<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::signup');
$routes->get('Home/signup', 'Home::signup');
$routes->get('Home/login', 'Home::login');
$routes->post('Home/loginProccess', 'Home::loginProccess');

// Chats
$routes->get('Chats', 'Chats::chatsList');
$routes->get('Chats/chatRoom', 'Chats::chatRoom');

$routes->get('socket.io', 'SocketIO::index');