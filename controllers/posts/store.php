<?php
use Core\Database;
use Core\Validator;

$pdo = new Database($config['database']);
$user_id = 1;
$errors = [];

foreach($_POST as $name => $value) {
    Validator::checkEmpty(ucfirst($name), $value);
}

if(empty($errors)) {
    extract($_POST);
    $statement = $pdo->query('INSERT INTO posts (title, body, user_id) VALUES(:title, :body, :user_id)', [
        'title' => $title,
        'body' => $body,
        'user_id' => $user_id
    ]);

    $post_id = $statement->insertOrAbort();
    header('Location: /post?id='.$post_id);
}
