<?php 
use Core\Database;
use Core\Validator;

$pdo = new Database($config['database']);
$user_id = 1;
$errors = [];

view('posts/create.view.php');