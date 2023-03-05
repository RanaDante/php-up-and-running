<?php

use Core\Database;
use Models\Posts;

//base_location('Models/Posts.php');

$user_id = 1;
$errors = [];
$posts = new Posts($config['database'], []);
$results = $posts->All();

if(empty($results)) {
    $errors[] = 'Sorry no posts found.';
}

view('posts/index.view.php', [
    'results' => $results
]);