<?php
use Core\Database;
use Models\Posts;
//base_location('Models/Posts.php');

$post_id = $_GET['id'];

$posts = new Posts($config['database'], []);
$result = $posts->get($post_id);

$user_id = 1;
check_authorization((int) $result['user_id'] === $user_id);
view('posts/show.view.php', [
    'result' => $result
]);