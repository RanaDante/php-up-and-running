<?php

// Create a database and connect it

$dsn = 'mysql:' . http_build_query($config['database'],'',';');
$pdo    =   new PDO($dsn);

// query data and show it
$statement = $pdo->prepare('SELECT * FROM posts;');
$statement->execute();

$results = $statement->fetchAll();
$errors = [];

$errors = checkEmptyResults($results, $errors);

function checkEmptyResults($results, $errors) {
    if(empty($results)) {
        $errors['no_data'] = 'Sorry No Data Found.';
    }
    return $errors;
}
// create helper functions

// mimic user authentication

// load the data into the view

require('views/index.view.php');