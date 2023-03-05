<?php

$route->get('/', 'controllers/index.php');
$route->get('/about', 'controllers/about.php');
$route->get('/contact', 'controllers/contact.php');
$route->get('/posts', 'controllers/posts/index.php');
$route->get('/post', 'controllers/posts/show.php');
$route->get('/post-create', 'controllers/posts/create.php');

$route->post('/store', 'controllers/posts/store.php');

$route->delete('/destroy', 'controllers/posts/destroy.php');
