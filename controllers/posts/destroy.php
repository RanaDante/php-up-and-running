<?php 
use Core\Database;

$post_id = $_POST['id'];
$pdo = new Database($config['database']);
$user_id = 1;
// check_authorization($result['user_id'] === $user_id);

$statement = $pdo->query('DELETE FROM posts where id = :id AND user_id = :user_id', [
    'id' => $post_id,
    'user_id' => $user_id
]);
$row_count = $statement->deleteOrAbort();

if($row_count > 0) {
    header('Location: /posts');
}